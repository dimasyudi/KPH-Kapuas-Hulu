@extends('back.partials.layout')
@section('title')
Detail Berita
@endsection

@section('content')
<div class="panel-content">
  <div class="row">
    <h1>Detail Berita</h1>
  </div>
  <br>
  <form action="" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label>Judul Berita</label>
      <input type="text" name="nama" class="form-control" value="{{ $berita->judul }}" readonly>
    </div>
    <div class="form-group">
      <label>Isi Berita</label>
      <textarea name="deskripsi" rows="8" cols="80" class="form-control" readonly>{{ $berita->isi }}</textarea>
    </div>
    <div class="form-group">
      <label>Foto</label>
      <br>
      <img src="{{ asset('uploads/berita') }}/{{ $berita->foto }}" width="300">
    </div>
  </form>
</div>
@endsection
