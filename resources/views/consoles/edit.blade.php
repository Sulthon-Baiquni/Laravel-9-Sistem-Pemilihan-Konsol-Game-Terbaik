@extends('layoutAdmin.dashboard')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Data Konsol Game</h1>
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

        <form action="{{ route('update', ['id' => $console->id]) }}" method="POST">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $console->name }}" required>
            </div>

            <div class="form-group">
                <label for="price">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" value="{{ $console->harga }}" required>
            </div>

            <div class="form-group">
                <label for="memory_capacity">Kapasitas Memori</label>
                <input type="text" class="form-control" id="kapasitas_memori" name="kapasitas_memori" value="{{ $console->kapasitas_memori }}" required>
            </div>

            <div class="form-group">
                <label for="cpu_speed">Kecepatan CPU</label>
                <input type="text" class="form-control" id="kecepatan_cpu" name="kecepatan_cpu" value="{{ $console->kecepatan_cpu }}" required>
            </div>

            <div class="form-group">
                <label for="weight">Berat</label>
                <input type="text" class="form-control" id="berat" name="berat" value="{{ $console->berat }}" required>
            </div>

            <div class="form-group">
                <label for="power_consumption">Konsumsi Daya</label>
                <input type="text" class="form-control" id="konsumsi_daya" name="konsumsi_daya" value="{{ $console->konsumsi_daya }}" required>
            </div>

            <button type="submit" class="btn btn-primary mr-2">Update</button>
            <button type="button" class="btn btn-danger" onclick="window.location.href='{{ route('konsol') }}'">Cancel</button>
        </form>
        <br>
    </div>
</div>
@endsection
