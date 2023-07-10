@extends('layoutAdmin.dashboard')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Daftar Data Konsol Game</h1>
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
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
    
        {{-- <h1>Consoles</h1> --}}
    
        <a href="{{ route('create') }}" class="btn btn-primary mb-3">Tambah Konsol</a>
        <a href="{{ route('spk') }}" class="btn btn-danger mb-3">Perhitungan SPK</a>
    
        <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Kapasitas Memori</th>
                    <th>Kecepatan CPU</th>
                    <th>Berat</th>
                    <th>Konsumsi Daya</th>
                    <th>Actions</th>
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
                        <td>
                            <a href="{{ route('edit', ['id' => $console->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('delete', ['id' => $console->id]) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $consoles -> links() }}
    </div>
</div>
@endsection
