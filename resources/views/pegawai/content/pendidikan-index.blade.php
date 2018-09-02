@extends('pegawai.partials.layout')
@section('title')
Kelola Data Pendidikan
@endsection

@section('content')
<div class="panel-content">
  <div class="row">
    <h3>Kelola Data Pendidikan</h3>
  </div>
  <br>
  <form action="{{ route('kelola-data-pendidikan-saya.update', ['id' => $pendidikan->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="nip" required class="form-control" value="{{ $pegawai->nip }}">
    <div class="form-group">
      <label>Pendidikan Terakhir</label>
      <input type="text" name="pendidikan_formal" value="{{ $pendidikan->pendidikan_formal }}" required class="form-control">
    </div>
    <div class="form-group">
      <label>Tahun</label>
      <input type="text" name="tahun" value="{{ $pendidikan->tahun }}" required class="form-control">
    </div>
    <div class="form-group">
      <label>No Ijazah</label>
      <input type="text" name="no_ijazah" value="{{ $pendidikan->no_ijazah }}" required class="form-control">
    </div>
    <div class="form-group">
      <label>Institusi</label>
      <input type="text" name="institusi" value="{{ $pendidikan->institusi }}" required class="form-control">
    </div>
    <div class="form-group">
      <label>Lokasi</label>
      <input type="text" name="lokasi" value="{{ $pendidikan->lokasi}}" required class="form-control">
    </div>
    <input type="submit" name="submit" value="Simpan" class="btn btn-success">
  </form>
</div>
@endsection
