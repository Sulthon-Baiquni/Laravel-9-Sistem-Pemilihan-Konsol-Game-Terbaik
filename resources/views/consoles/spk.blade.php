@extends('layouts')
@section('content')
    <section class="bg-white dark:bg-gray-900">
        <style>
            .form-container {
                padding-left: 24px;
                padding-right: 24px;
            }

            .btn-hasil {
                padding-left: 24px;
                padding-right: 24px;
            }

            .max-h-modal {
                max-height: 550px;
                /* Atur tinggi maksimum  */
                max-width: 1200px;
                overflow-y: auto;
            }
        </style>
        <title>Form</title>
        </head>

        <body>
            <section class="bg-white dark:bg-gray-900">
                <!-- Formulir input bobot -->
                <form class="form-container" data-aos="fade-down" data-aos-easing="linear" action="{{ route('spk') }}" method="POST">
                    @csrf
                    <br>
                    <h1 class="text-gray-900 dark:text-white text-3xl font-semibold text-center mb-3 mt-2" 
                    >Perhitungan Sistem
                        Pendukung Keputusan Untuk
                        Menentukan Konsol Game Terbaik Menggunakan Metode Weighted Product
                    </h1>
                    <br>
                    <hr class="border-t border-gray-300 dark:border-gray-700 mb-6 ">
                    <h1 class="text-gray-900 dark:text-white text-2xl font-semibold mt-6 mb-4" >Masukan Nama dan Tanggal
                    </h1>

                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="nama"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <input type="text" id="nama" name="nama"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukkan nama" required>
                        </div>
                        <div>
                            <label for="tanggal_pemilihan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                                Pemilihan</label>
                            <input type="date" id="tanggal_pemilihan" name="tanggal_pemilihan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Pilih tanggal pemilihan" required>
                        </div>
                    </div>

                    <h1 class="text-gray-900 dark:text-white text-2xl font-semibold mt-6 mb-1">Inputkan untuk nilai bobot
                        dan kepentingan untuk setiap kriteria
                    </h1>
                    <div class="mt-3 flex items-center p-4 mb-4 text-sm text-gray-900 dark:text-white border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:border-blue-800" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="sr-only">Info</span>
                        <div class="font-medium">
                          <span class="font-semibold">Note : </span> Nilai bobot kriteria harus berjumlah 1
                        </div>
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="harga_bobot"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bobot Harga</label>
                            <input type="text" id="harga_bobot" name="harga_bobot"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan bobot harga" required>
                        </div>
                        <div>
                            <label for="kepentingan_harga"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nilai Kepentingan
                                Harga</label>
                            <input type="text" id="kepentingan_harga" name="kepentingan_harga"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan nilai kepentingan harga" required>
                        </div>
                        <div>
                            <label for="memori_bobot"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bobot Kapasitas
                                Memori</label>
                            <input type="text" id="memori_bobot" name="memori_bobot"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan bobot kapasitas memori" required>
                        </div>
                        <div>
                            <label for="kepentingan_memori"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nilai Kepentingan
                                Kapasitas Memori</label>
                            <input type="text" id="kepentingan_memori" name="kepentingan_memori"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan nilai kepentingan kapasitas memori" required>
                        </div>
                        <div>
                            <label for="cpu_bobot"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bobot Kecepatan
                                CPU</label>
                            <input type="text" id="cpu_bobot" name="cpu_bobot"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan bobot kecepatan CPU" required>
                        </div>
                        <div>
                            <label for="kepentingan_cpu"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nilai Kepentingan
                                CPU</label>
                            <input type="text" id="kepentingan_cpu" name="kepentingan_cpu"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan nilai kepentingan kecepatan CPU" required>
                        </div>
                        <div>
                            <label for="berat_bobot"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bobot Berat</label>
                            <input type="text" id="berat_bobot" name="berat_bobot"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan bobot berat" required>
                        </div>
                        <div>
                            <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nilai
                                Kepentingan Berat</label>
                            <input type="text" id="kepentingan_berat" name="kepentingan_berat"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan nilai kepentingan berat" required>
                        </div>
                        <div>
                            <label for="daya_bobot"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bobot Konsumsi
                                Daya</label>
                            <input type="text" id="daya_bobot" name="daya_bobot"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan bobot konsumsi daya" required>
                        </div>
                        <div>
                            <label for="kepentingan_daya"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nilai Kepentingan
                                Konsumsi Daya</label>
                            <input type="text" id="kepentingan_daya" name="kepentingan_daya"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan nilai kepentingan konsumsi daya" required>
                        </div>
                    </div>
                    <div class="flex justify-between mb-5">
                        <button type="submit" id="submit-button"
                            class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Submit</button>
                    </div>
                </form>

                <div class="btn-hasil">
                    <div class="mt-3 flex items-center p-4 mb-4 text-sm text-gray-900 dark:text-white border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:border-blue-800" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="sr-only">Info</span>
                        <div class="font-medium">
                          <span class="font-semibold">Note : </span>  Masukkan Semua Inputan Lalu Submit Terlebih Dahulu
                        </div>
                    </div>

                    <div class="flex">
                        <button type="submit" id="readProductButton" data-modal-toggle="readProductModal"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Lihat Hasil Perhitungan Sistem Pendukung Keputusan
                        </button>
                    </div>
                    <br>
                </div>
                

                <div id="readProductModal" tabindex="-1" aria-hidden="true"
                    class="hidden fixed inset-0 z-50 overflow-y-auto">
                    <div class="flex items-center justify-center min-h-screen">
                        <div class="bg-white dark:bg-gray-900 rounded-lg shadow-lg p-6">
                            <div class="text-right">
                                <button type="button"
                                    class="text-gray-400 float-right bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-toggle="readProductModal">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Konten modal -->
                            <h1 class="text-gray-900 dark:text-white text-3xl font-semibold text-center">Perhitungan Sistem Pendukung Keputusan</h1>
                            <br>
                            <div class="overflow-y-auto max-h-modal sm:max-h-full shadow-md sm:rounded-lg">
                                <div class="max-w-full overflow-x-auto">
                                    <table class="w-full text-sm text-left text-gray-900 dark:text-white">
                                        <thead
                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="text-left px-6 py-3">Name</th>
                                                <th scope="col" class="text-left px-6 py-3">Harga</th>
                                                <th scope="col" class="text-left px-6 py-3">Kapasitas Memori</th>
                                                <th scope="col" class="text-left px-6 py-3">Kecepatan CPU</th>
                                                <th scope="col" class="text-left px-6 py-3">Berat</th>
                                                <th scope="col" class="text-left px-6 py-3">Konsumsi Daya</th>
                                                <th scope="col" class="text-left px-6 py-3">Nilai Preferensi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="consoleTableBody">
                                            @foreach ($consoles as $console)
                                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                                    <td class="px-6 py-4">{{ $console->name }}</td>
                                                    <td class="px-6 py-4">{{ $console->harga }}</td>
                                                    <td class="px-6 py-4">{{ $console->kapasitas_memori }}</td>
                                                    <td class="px-6 py-4">{{ $console->kecepatan_cpu }}</td>
                                                    <td class="px-6 py-4">{{ $console->berat }}</td>
                                                    <td class="px-6 py-4">{{ $console->konsumsi_daya }}</td>
                                                    <td class="px-6 py-4">{{ $console->hasil }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <script>
                document.querySelector('.form-container').addEventListener('submit', async function(event) {
                    event.preventDefault();
                    await Swal.fire({
                        title: "Inputan Nilai Kriteria Berhasil 🤩🤩🤩",
                        text: "Silahkan Klik Lihat Hasil Perhitungan Dibawah Tombol Submit Untuk Melihat Ranking ",
                        icon: "success",
                        confirmButtonText: "Lanjutkan"
                    });
                    this.submit();
                });
            </script>
        @endsection
