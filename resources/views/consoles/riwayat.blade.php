@extends('layoutAdmin.dashboard')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Riwayat Hasil Perhitungan User</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

    <div class="container">
        
        <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Bobot Harga</th>
                    <th>Bobot Memori</th>
                    <th>Bobot CPU</th>
                    <th>Bobot Berat</th>
                    <th>Bobot Daya</th>
                    <th>Nilai Harga</th>
                    <th>Nilai Memori</th>
                    <th>Nilai CPU</th>
                    <th>Nilai Berat</th>
                    <th>Nilai Daya</th>
                    <th>Nama Konsol</th>
                    <th>Hasil</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spkData as $data)
                    <tr>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->tanggal_pemilihan }}</td>
                        <td>{{ $data->harga_bobot }}</td>
                        <td>{{ $data->memori_bobot }}</td>
                        <td>{{ $data->cpu_bobot }}</td>
                        <td>{{ $data->berat_bobot }}</td>
                        <td>{{ $data->daya_bobot }}</td>
                        <td>{{ $data->kepentingan_harga }}</td>
                        <td>{{ $data->kepentingan_memori }}</td>
                        <td>{{ $data->kepentingan_cpu }}</td>
                        <td>{{ $data->kepentingan_berat }}</td>
                        <td>{{ $data->kepentingan_daya }}</td>
                        <td>{{ $data->nama_konsol }}</td>
                        <td>{{ $data->hasil }}</td>
                    </tr>
                 @endforeach
            </tbody>
        </table>
        {{ $spkData -> links() }}
        <br>
    </div>
</div>
@endsection
