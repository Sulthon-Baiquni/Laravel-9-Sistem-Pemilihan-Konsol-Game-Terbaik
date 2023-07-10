<?php

namespace App\Http\Controllers;

use App\Models\Konsol;
use App\Models\SpkData;
use Illuminate\Http\Request;

class KonsolController extends Controller
{
    public function index()
    {
        $consoles = Konsol::paginate(5);
        return view('consoles.index', compact('consoles'));
    }

    public function create()
    {
        return view('consoles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'harga' => 'required',
            'kapasitas_memori' => 'required',
            'kecepatan_cpu' => 'required',
            'berat' => 'required',
            'konsumsi_daya' => 'required',
        ]);

        Konsol::create($request->all());

        return redirect('/konsol')->with('success', 'Berhasil Menambahkan Data Konsol Baru');
    }

    public function edit($id)
    {
        $console = Konsol::find($id);
        return view('consoles.edit', compact('console'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'harga' => 'required',
            'kapasitas_memori' => 'required',
            'kecepatan_cpu' => 'required',
            'berat' => 'required',
            'konsumsi_daya' => 'required',
        ]);

        $console = Konsol::find($id);
        $console->update($request->all());

        return redirect('/konsol')->with('success', 'Data Konsol Telah Diupdate');
    }

    public function destroy($id)
    {
        $console = Konsol::find($id);
        $console->delete();

        return redirect('/konsol')->with('success', 'Data Konsol Telah Dihapus');
    }

    public function spk(Request $request)
    {
        $consoles = Konsol::all();

        //input nilai bobot
        $hargaBobot = $request->input('harga_bobot');
        $kapasitasMemoriBobot = $request->input('memori_bobot');
        $kecepatanCpuBobot = $request->input('cpu_bobot');
        $beratBobot = $request->input('berat_bobot');
        $konsumsiDayaBobot = $request->input('daya_bobot');
        
        $nama = $request->input('nama');
        $tanggalPemilihan = $request->input('tanggal_pemilihan');
        
        //input nilai kepentingan
        $kepentinganHarga = $request->input('kepentingan_harga');
        $kepentinganMemori = $request->input('kepentingan_memori');
        $kepentinganCpu = $request->input('kepentingan_cpu');
        $kepentinganBerat = $request->input('kepentingan_berat');
        $kepentinganDaya = $request->input('kepentingan_daya');

        // Mendefinisikan cost dan benefit
        $CB_harga = 'cost';
        $CB_memori = 'benefit';
        $CB_cpu = 'benefit';
        $CB_berat = 'cost';
        $CB_daya = 'cost';

        // Menghitung nilai preferensi hanya jika tombol "Hitung SPK" diklik
        if ($hargaBobot && $kapasitasMemoriBobot && $kecepatanCpuBobot && $beratBobot && $konsumsiDayaBobot) {
            // Melakukan perhitungan Weighted Product
            foreach ($consoles as $console) {
                // Menghitung pangkat kriteria berdasarkan cost/benefit
                $hargaPangkat = ($CB_harga == 'benefit') ? $hargaBobot : (-1) * $hargaBobot;
                $memoriPangkat = ($CB_memori == 'benefit') ? $kapasitasMemoriBobot : (-1) * $kapasitasMemoriBobot;
                $cpuPangkat = ($CB_cpu == 'benefit') ? $kecepatanCpuBobot : (-1) * $kecepatanCpuBobot;
                $beratPangkat = ($CB_berat == 'benefit') ? $beratBobot : (-1) * $beratBobot;
                $dayaPangkat = ($CB_daya == 'benefit') ? $konsumsiDayaBobot : (-1) * $konsumsiDayaBobot;
                
                // Menghitung Vector S
                $vectorS = pow($console->harga, $hargaPangkat) *
                    pow($console->kapasitas_memori, $memoriPangkat) *
                    pow($console->kecepatan_cpu, $cpuPangkat) *
                    pow($console->berat, $beratPangkat) *
                    pow($console->konsumsi_daya, $dayaPangkat);

                $console->nilai_vectorS = $vectorS;
            }

            // Menghitung hasil akhir
            $totalVectors = $consoles->sum('nilai_vectorS');
            foreach ($consoles as $console) {
                $console->hasil = $console->nilai_vectorS / $totalVectors;
            }

            //menyimpan data inputan dan hasil perhitungan user ke database
            foreach ($consoles as $console) {
                $spkData = new SpkData();
                $spkData->nama = $nama;
                $spkData->tanggal_pemilihan = $tanggalPemilihan;
                $spkData->harga_bobot = $hargaBobot;
                $spkData->memori_bobot = $kapasitasMemoriBobot;
                $spkData->cpu_bobot = $kecepatanCpuBobot;
                $spkData->berat_bobot = $beratBobot;
                $spkData->daya_bobot = $konsumsiDayaBobot;
                $spkData->kepentingan_harga = $kepentinganHarga;
                $spkData->kepentingan_memori = $kepentinganMemori;
                $spkData->kepentingan_cpu = $kepentinganCpu;
                $spkData->kepentingan_berat = $kepentinganBerat;
                $spkData->kepentingan_daya = $kepentinganDaya;
                // Menambahkan nama konsol menggunakan join antara database konsols dan spkdata
                $konsol = Konsol::where('id', $console->id)->first();
                if ($konsol) {
                    $spkData->nama_konsol = $konsol->name;
                }
                $spkData->hasil = $console->hasil;
                $spkData->save();
            }
        }

        // Mengurutkan konsol berdasarkan skor tertinggi
        $consoles = $consoles->sortByDesc('hasil');

        return view('consoles.spk', compact('consoles'));
    }

    public function riwayat()
    {
        $spkData = SpkData::paginate(10);

        return view('consoles.riwayat', compact('spkData'));
    }

}