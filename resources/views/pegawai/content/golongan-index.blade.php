@extends('pegawai.partials.layout')
@section('title')
Kelola Data Golongan
@endsection

@section('content')
<div class="panel-content">
  <div class="row">
    <h3>Kelola Data Golongan</h3>
  </div>
  <br>
  <form action="{{ route('kelola-data-golongan-saya.update', ['id' => $golongan->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="nip" required class="form-control" value="{{ $pegawai->nip }}">
    <div class="form-group">
      <label>TMT CPNS</label>
      <input type="date" name="tmt_cpns" required class="form-control" value="{{ $golongan->tmt_cpns }}">
    </div>
    <div class="form-group">
      <label>TMT PNS</label>
      <input type="date" name="tmt_pns" required class="form-control" value="{{ $golongan->tmt_pns }}">
    </div>
    <div class="form-group">
      <label>Pangkat / Golongan</label>
      <!-- <input type="text" name="pangkat" required class="form-control" value="{{ $golongan->pangkat }}"> -->
      <select class="form-control" name="pangkat" required>
        <option value="Juru Muda - I/a">Juru Muda - I/a</option>
        <option value="Juru Muda Tingkat 1 - I/b">Juru Muda Tingkat 1 - I/b</option>
        <option value="Juru - I/c">Juru - I/c</option>
        <option value="Juru Tingkat 1 - I/d">Juru Tingkat 1 - I/d</option>
        <option value="Pengatur Muda - II/a">Pengatur Muda - II/a</option>
        <option value="Pengatur Muda Tingkat 1 - II/b">Pengatur Muda Tingkat 1 - II/b</option>
        <option value="Pengatur - II/c">Pengatur - II/c</option>
        <option value="Pengatur Tingkat 1 - II/d">Pengatur Tingkat 1 - II/d</option>
        <option value="Penata Muda - III/a">Penata Muda - III/a</option>
        <option value="Penata Muda Tingkat 1 - III/b">Penata Muda Tingkat 1 - III/b</option>
        <option value="Penata - III/c">Penata - III/c</option>
        <option value="Penata Tingkat 1 - III/d">Penata Tingkat 1 - III/d</option>
      </select>
    </div>
    <div class="form-group">
      <label>Jabatan</label>
      <input type="text" name="golongan" required class="form-control" value="{{ $golongan->golongan }}">
    </div>
    <div class="form-group">
      <label>Eselon</label>
      <input type="text" name="eselon" required class="form-control" value="{{ $golongan->eselon }}">
    </div>
    <div class="form-group">
      <label>Kenaikan Gaji Berkala</label>
      <input type="date" name="gajiberkala" required class="form-control" value="{{ $golongan->gajiberkala }}">
    </div>
    <input type="submit" name="submit" value="Simpan" class="btn btn-success">
  </form>
</div>
@endsection
