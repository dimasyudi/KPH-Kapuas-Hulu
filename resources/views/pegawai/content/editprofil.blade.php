@extends('pegawai.partials.layout')
@section('title')
Ubah Profil
@endsection

@section('content')
<div class="panel-content">
  <div class="row">
    <h3>Ubah Password Akun</h3>
  </div>
  <br>
  <form action="{{ route('pegawai.editPassword.submit', ['id' => $user->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
      <label>Password</label>
      <input type="password" name="password" class="form-control" required>
    </div>
    <input type="submit" name="submit" value="Simpan" class="btn btn-success">
  </form>
</div>
@endsection
