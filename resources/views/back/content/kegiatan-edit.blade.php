@extends('back.partials.layout')
@section('title')
Ubah Kegiatan
@endsection

@section('content')
<div class="panel-content">
  <div class="row">
    <h1>Ubah Kegiatan dan Aktivitas</h1>
  </div>
  <br>
  <form action="{{ route('kelola-kegiatan.update', ['id' => $kegiatan->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
      <label>Nama Kegiatan</label>
      <input type="text" name="nama" class="form-control" value="{{ $kegiatan->nama }}" required>
    </div>
    <div class="form-group">
      <label>Deskripsi Kegiatan</label>
      <textarea name="deskripsi" rows="8" cols="80" class="form-control" required>{{ $kegiatan->deskripsi }}</textarea>
    </div>
    <div class="form-group">
      <label>Alamat</label>
      <input type="text" name="alamat" class="form-control" value="{{ $kegiatan->alamat }}" required>
    </div>
    <div class="form-group">
      <label>Foto (Resolusi Rekomendasi : 1000x637)</label>
      <br>
      <img src="{{ asset('uploads/kegiatan') }}/{{ $kegiatan->foto }}" width="200">
      <input type="file" name="foto" class="form-control">
    </div>
    <div class="form-group">
      <label>Tanggal Mulai</label>
      <input type="date" name="tglmulai" class="form-control" value="{{ $kegiatan->tglmulai }}" required>
    </div>
    <div class="form-group">
      <label>Tanggal Selesai (Jika Ada)</label>
      <input type="date" name="tglselesai" class="form-control" value="{{ $kegiatan->tglselesai }}">
    </div>
    <input type="submit" name="submit" value="Simpan" class="btn btn-success">
  </form>
</div>
@endsection
