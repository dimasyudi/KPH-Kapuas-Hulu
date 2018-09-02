@extends('back.partials.layout')
@section('title')
Kelola Kegiatan
@endsection

@section('content')
<div class="panel-content">
  <div class="row">
    <h1>Kelola Kegiatan dan Aktivitas</h1>
  </div>
  <div class="row" style="margin-bottom:20px;">
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Tambah Kegiatan</button>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Form Tambah Kegiatan dan Aktivitas</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="{{ route('kelola-kegiatan.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>Nama Kegiatan</label>
                <input type="text" name="nama" required placeholder="Nama Kegiatan" class="form-control">
              </div>
              <div class="form-group">
                <label>Deskripsi Kegiatan</label>
                <textarea name="deskripsi" rows="8" cols="80" required class="form-control" placeholder="Deskripsi Kegiatan"></textarea>
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" required placeholder="Alamat" class="form-control">
              </div>
              <div class="form-group">
                <label>Foto (Resolusi Rekomendasi : 1000x637)</label>
                <input type="file" name="foto" required class="form-control">
              </div>
              <div class="form-group">
                <label>Tanggal Mulai</label>
                <input type="date" name="tglmulai" required class="form-control">
              </div>
              <div class="form-group">
                <label>Tanggal Selesai (Jika Ada)</label>
                <input type="date" name="tglselesai" required class="form-control">
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
        <th>Nama Kegiatan</th>
        <th>Alamat</th>
        <th>Tanggal</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($kegiatans as $kegiatan)
      <tr>
        <td>{{ $kegiatan->nama }}</td>
        <td>{{ $kegiatan->alamat }}</td>
        <td>{{ date('d-m-Y', strtotime($kegiatan->tglmulai)) }}</td>
        <td>
          <a href="{{ route('kelola-kegiatan.show', ['id' => $kegiatan->id]) }}" class="btn btn-sm btn-primary">Lihat</a>
          <a href="{{ route('kelola-kegiatan.edit', ['id' => $kegiatan->id]) }}" class="btn btn-sm btn-info">Ubah</a>
          <form style="display:inline;" action="{{ route('kelola-kegiatan.destroy', ['id' => $kegiatan->id]) }}" method="post">
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
