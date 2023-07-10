@extends('layout')

@section('content')
    <div class="container">
        <h1>Bobot Kriteria</h1>
        <h3>Masukan nilai bobot untuk setiap kriteria</h3>
        <p>Bobot Kriteria yang dimasukan harus berjumlah 1</p>
        <form action="/spk" method="POST">
  @csrf

  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="harga_bobot">Bobot Harga</label>
        <input type="text" class="form-control" id="harga_bobot" name="harga_bobot" required>
      </div>

      <div class="form-group">
        <label for="memori_bobot">Bobot Kapasitas Memori</label>
        <input type="text" class="form-control" id="memori_bobot" name="memori_bobot" required>
      </div>

      <div class="form-group">
        <label for="cpu_bobot">Bobot Kecepatan CPU</label>
        <input type="text" class="form-control" id="cpu_bobot" name="cpu_bobot" required>
      </div>

      <div class="form-group">
        <label for="berat_bobot">Bobot Berat</label>
        <input type="text" class="form-control" id="berat_bobot" name="berat_bobot" required>
      </div>

      <div class="form-group">
        <label for="daya_bobot">Bobot Konsumsi Daya</label>
        <input type="text" class="form-control" id="daya_bobot" name="daya_bobot" required>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label for="kepentingan_harga">Nilai Kepentingan Harga</label>
        <input type="text" class="form-control" id="kepentingan_harga" name="kepentingan_harga" required>
      </div>

      <div class="form-group">
        <label for="kepentingan_memori">Nilai Kepentingan Kapasitas Memori</label>
        <input type="text" class="form-control" id="kepentingan_memori" name="kepentingan_memori" required>
      </div>

      <div class="form-group">
        <label for="kepentingan_cpu">Nilai Kepentingan Kecepatan CPU</label>
        <input type="text" class="form-control" id="kepentingan_cpu" name="kepentingan_cpu" required>
      </div>

      <div class="form-group">
        <label for="kepentingan_berat">Nilai Kepentingan Berat</label>
        <input type="text" class="form-control" id="kepentingan_berat" name="kepentingan_berat" required>
      </div>

      <div class="form-group">
        <label for="kepentingan_daya">Nilai Kepentingan Konsumsi Daya</label>
        <input type="text" class="form-control" id="kepentingan_daya" name="kepentingan_daya" required>
      </div>
    </div>
  </div>
  
  <br>
  <button type="submit" class="btn btn-primary">Hitung SPK</button>
</form>

        <br>
        <h1 class="text-center">Perhitungan Konsol Game Terbaik</h1>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Harga</th>
                    <th>Kapasitas Memori</th>
                    <th>Kecepatan CPU</th>
                    <th>Berat</th>
                    <th>Konsumsi Daya</th>
                    <th>Nilai Preferensi</th> 
                </tr>
            </thead>
            <tbody>
                @foreach ($consoles as $console)
                    <tr>
                        <td>{{ $console->name }}</td>
                        <td>{{ $console->harga }}</td>
                        <td>{{ $console->kapasitas_memori }}</td>
                        <td>{{ $console->kecepatan_cpu }}</td>
                        <td>{{ $console->berat }}</td>
                        <td>{{ $console->konsumsi_daya }}</td>
                        <td>{{ $console->hasil }}</td> 
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
