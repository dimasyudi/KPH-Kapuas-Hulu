@extends('back.partials.layout')
@section('title')
Ubah Data Keluarga
@endsection

@section('content')
<div class="panel-content">
  <div class="row">
    <h1>Ubah Data Keluarga</h1>
  </div>
  <br>
  <form action="{{ route('data-keluarga.update', ['id' => $user->id, 'data_keluarga' => $keluarga->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
      <label>Nama Lengkap</label>
      <input type="text" name="nama" required placeholder="Nama Lengkap" class="form-control" value="{{ $keluarga->nama }}">
    </div>
    <div class="form-group">
      <label>Status Dalam Keluarga</label>
      <div class="clearfix"></div>
      <select class="form-control" name="status">
        <option value="Suami">Suami</option>
        <option value="Istri">Istri</option>
        <option value="Anak">Anak</option>
      </select>
    </div>
    <div class="form-group">
      <label>Tempat Tanggal Lahir</label>
      <input type="text" name="ttl" required placeholder="Pontianak, 17 Agustus 1960" class="form-control" value="{{ $keluarga->ttl }}">
    </div>
    <div class="form-group">
      <label>Status Menikah</label>
      <div class="clearfix"></div>
      <select class="form-control" name="menikah">
        <option value="Belum Menikah">Belum Menikah</option>
        <option value="Sudah Menikah">Sudah Menikah</option>
      </select>
    </div>
    <input type="submit" name="submit" value="Simpan" class="btn btn-success">
  </form>
</div>
@endsection
