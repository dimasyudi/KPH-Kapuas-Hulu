@extends('pegawai.partials.layout')
@section('title')
Kelola Data Pegawai
@endsection

@section('content')
<div class="panel-content">
  <div class="row">
    <h3>Kelola Data Pegawai</h3>
  </div>
  <br>
  <form action="{{ route('kelola-data-pegawai-saya.update', ['id' => $pegawai->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
      <label>NIP</label>
      <input type="text" name="nip" required class="form-control" value="{{ $pegawai->nip }}">
    </div>
    <div class="form-group">
      <label>Nama</label>
      <input type="text" name="nama" required class="form-control" value="{{ $pegawai->nama }}">
    </div>
    <div class="form-group">
      <label>TTL</label>
      <input type="text" name="ttl" required class="form-control" value="{{ $pegawai->ttl }}">
    </div>
    <div class="form-group">
      <label>Alamat</label>
      <input type="text" name="alamat" required class="form-control" value="{{ $pegawai->alamat }}">
    </div>
    <div class="form-group">
      <label>Jenis Kelamin</label>
      <br>
      <select name="jenis_kelamin" class="form-control">
        <option value="Laki Laki" {{ $pegawai->jenis_kelamin === "Laki Laki" ? "selected" : "" }}>Laki Laki</option>
        <option value="Perempuan" {{ $pegawai->jenis_kelamin === "Perempuan" ? "selected" : "" }}>Perempuan</option>
      </select>
    </div>
    <div class="form-group">
      <label>No Telp</label>
      <input type="text" name="no_telp" required class="form-control" value="{{ $pegawai->no_telp }}">
    </div>
    <div class="form-group">
      <label>Agama</label>
      <br>
      <select class="form-control" name="agama">
        <option value="Islam" {{ $pegawai->agama === "Islam" ? "selected" : "" }}>Islam</option>
        <option value="Katolik" {{ $pegawai->agama === "Katolik" ? "selected" : "" }}>Katolik</option>
        <option value="Protestan" {{ $pegawai->agama === "Protestan" ? "selected" : "" }}>Protestan</option>
        <option value="Hindu" {{ $pegawai->agama === "Hindu" ? "selected" : "" }}>Hindu</option>
        <option value="Buddha" {{ $pegawai->agama === "Buddha" ? "selected" : "" }}>Buddha</option>
        <option value="Khonghucu" {{ $pegawai->agama === "Khonghucu" ? "selected" : "" }}>Khonghucu</option>
      </select>
    </div>
    <input type="submit" name="submit" value="Simpan" class="btn btn-success">
  </form>
</div>
@endsection
