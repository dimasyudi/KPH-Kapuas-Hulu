@extends('back.partials.layout')
@section('title')
Kelola Berita
@endsection

@section('content')
<div class="panel-content">
  <div class="row">
    <h1>Kelola Berita</h1>
  </div>
  <div class="row" style="margin-bottom:20px;">
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Tambah Berita</button>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Form Tambah Berita</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="{{ route('kelola-berita.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" required placeholder="Judul Berita" class="form-control">
              </div>
              <div class="form-group">
                <label>Isi</label>
                <textarea name="isi" rows="8" cols="80" class="form-control" required placeholder="Isi Berita"></textarea>
              </div>
              <div class="form-group">
                <label>Foto (Resolusi Rekomendasi : 1000x637)</label>
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
        <th>Judul</th>
        <th>Isi</th>
        <th>Foto</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($beritas as $berita)
      <tr>
        <td>{{ $berita->judul }}</td>
        <td>{{ str_limit($berita->isi, 200) }}</td>
        <td><img src="{{asset('uploads/berita')}}/{{ $berita->foto }}" width="200"></td>
        <td>
          <a href="{{ route('kelola-berita.show', ['id' => $berita->id]) }}" class="btn btn-sm btn-primary">Lihat</a>
          <a href="{{ route('kelola-berita.edit', ['id' => $berita->id]) }}" class="btn btn-sm btn-info">Ubah</a>
          <form style="display:inline;" action="{{ route('kelola-berita.destroy', ['id' => $berita->id]) }}" method="post">
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
