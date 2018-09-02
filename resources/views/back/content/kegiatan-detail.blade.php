@extends('back.partials.layout')
@section('title')
Detail Kegiatan
@endsection

@section('content')
<div class="panel-content">
  <div class="row">
    <h1>Detail Kegiatan dan Aktivitas</h1>
  </div>
  <br>
  <form action="" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label>Nama Kegiatan</label>
      <input type="text" name="nama" class="form-control" value="{{ $kegiatan->nama }}" readonly>
    </div>
    <div class="form-group">
      <label>Deskripsi Kegiatan</label>
      <textarea name="deskripsi" rows="8" cols="80" class="form-control" readonly>{{ $kegiatan->deskripsi }}</textarea>
    </div>
    <div class="form-group">
      <label>Alamat</label>
      <input type="text" name="alamat" class="form-control" value="{{ $kegiatan->alamat }}" readonly>
    </div>
    <div class="form-group">
      <label>Foto</label>
      <br>
      <img src="{{ asset('uploads/kegiatan') }}/{{ $kegiatan->foto }}" width="200">
    </div>
    <div class="form-group">
      <label>Tanggal Mulai</label>
      <input type="date" name="tglmulai" class="form-control" value="{{ $kegiatan->tglmulai }}" readonly>
    </div>
    <div class="form-group">
      <label>Tanggal Selesai</label>
      <input type="date" name="tglselesai" class="form-control" value="{{ $kegiatan->tglselesai }}" readonly>
    </div>
  </form>
</div>
@endsection
