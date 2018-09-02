@extends('back.partials.layout')
@section('title')
Ubah Berita
@endsection

@section('content')
<div class="panel-content">
  <div class="row">
    <h1>Ubah Berita</h1>
  </div>
  <br>
  <form action="{{ route('kelola-berita.update', ['id' => $berita->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
      <label>Judul Berita</label>
      <input type="text" name="judul" class="form-control" value="{{ $berita->judul }}" required>
    </div>
    <div class="form-group">
      <label>Isi Berita</label>
      <textarea name="isi" rows="8" cols="80" class="form-control" required>{{ $berita->isi }}</textarea>
    </div>
    <div class="form-group">
      <label>Foto (Resolusi Rekomendasi : 1000x637)</label>
      <br>
      <img src="{{ asset('uploads/berita') }}/{{ $berita->foto }}" width="300">
      <input type="file" name="foto" class="form-control">
    </div>
    <input type="submit" name="submit" value="Simpan" class="btn btn-success">
  </form>
</div>
@endsection
