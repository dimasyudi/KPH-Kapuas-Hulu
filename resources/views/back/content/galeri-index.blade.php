@extends('back.partials.layout')
@section('title')
Kelola Galeri
@endsection

@section('content')
<div class="panel-content">
  <div class="row">
    <h1>Kelola Galeri Foto</h1>
  </div>
  <div class="row" style="margin-bottom:20px;">
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Tambah Foto</button>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Form Tambah Foto</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="{{ route('kelola-galeri.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>Nama / Judul</label>
                <input type="text" name="nama" required placeholder="Nama / Judul" class="form-control">
              </div>
              <div class="form-group">
                <label>Foto</label>
                <input type="file" name="foto" required class="form-control">
              </div>
          </div>
          <div class="modal-footer">
              <input type="submit" name="submit" value="Simpan" class="btn btn-success">
            </form>
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          </div>
        </div>
      </div>
    </div>

  </div>
  <table class="table" id="myTable">
    <thead>
      <tr>
        <th>Nama / Judul</th>
        <th>Foto</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($galeris as $galeri)
      <tr>
        <td>{{ $galeri->nama }}</td>
        <td><img src="{{asset('uploads/galeri')}}/{{ $galeri->foto }}" width="300"></td>
        <td>
          <form style="display:inline;" action="{{ route('kelola-galeri.destroy', ['id' => $galeri->id]) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" name="submit" value="Hapus" class="btn btn-sm btn-danger">
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
