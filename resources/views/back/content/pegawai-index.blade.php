@extends('back.partials.layout')
@section('title')
Kelola Pegawai
@endsection

@section('content')
<div class="panel-content">
  <div class="row">
    <h1>Kelola Data Pegawai</h1>
  </div>
  <div class="row" style="margin-bottom:20px;">
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Tambah Pegawai</button>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Form Tambah Pegawai</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="{{ route('kelola-pegawai.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>NIP</label>
                <input type="text" name="nip" required placeholder="Nomor Induk Pegawai" class="form-control" >
              </div>
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" required placeholder="Nama Lengkap" class="form-control">
              </div>
              <div class="form-group">
                <label>Tempat Tanggal Lahir</label>
                <input type="text" name="ttl" required placeholder="Pontianak, 10 September 1964" class="form-control">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" required placeholder="Alamat Lengkap" class="form-control">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin">
                  <option value="Laki Laki">Laki Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label>Nomor Telpon</label>
                <input type="text" name="no_telp" required placeholder="Nomor Telpon" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
              </div>
              <div class="form-group">
                <label>Agama</label>
                <select class="form-control" name="agama">
                  <option value="Islam">Islam</option>
                  <option value="Katolik">Katolik</option>
                  <option value="Protestan">Protestan</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Buddha">Buddha</option>
                  <option value="Khonghucu">Khonghucu</option>
                </select>
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
        <th>NIP</th>
        <th>Nama</th>
        <th>TTL</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>No Telp</th>
        <th>Agama</th>
        <th>Edit</th>
        <th>Hapus</th>
      </tr>
    </thead>
    <tbody>
      @foreach($pegawais as $pegawai)
      <tr>
        <td>{{ $pegawai->nip }}</td>
        <td>{{ $pegawai->nama }}</td>
        <td>{{ $pegawai->ttl }}</td>
        <td>{{ $pegawai->alamat }}</td>
        <td>{{ $pegawai->jenis_kelamin }}</td>
        <td>{{ $pegawai->no_telp }}</td>
        <td>{{ $pegawai->agama }}</td>
        <td>

          <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal{{ $pegawai->id }}">Edit</button>

          <!-- Modal -->
          <div id="myModal{{ $pegawai->id }}" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Form Tambah Pegawai</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <form action="{{ route('kelola-pegawai.update', ['id' => $pegawai->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                      <label>NIP</label>
                      <input type="text" name="nip" required value="{{ $pegawai->nip }}" class="form-control" style="width:95%;">
                    </div>
                    <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" name="nama" required value="{{ $pegawai->nama }}" class="form-control" style="width:95%;">
                    </div>
                    <div class="form-group">
                      <label>Tempat Tanggal Lahir</label>
                      <input type="text" name="ttl" required value="{{ $pegawai->ttl }}" class="form-control" style="width:95%;">
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="text" name="alamat" required value="{{ $pegawai->alamat }}" class="form-control" style="width:95%;">
                    </div>
                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <select class="form-control" name="jenis_kelamin">
                        <option value="Laki Laki" {{ $pegawai->jenis_kelamin === "Laki Laki" ? "selected" : "" }}>Laki Laki</option>
                        <option value="Perempuan" {{ $pegawai->jenis_kelamin === "Perempuan" ? "selected" : "" }}>Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Nomor Telpon</label>
                      <input type="text" name="no_telp" required value="{{ $pegawai->no_telp }}" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' style="width:95%;">
                    </div>
                    <div class="form-group">
                      <label>Agama</label>
                      <select class="form-control" name="agama">
                        <option value="Islam" {{ $pegawai->agama === "Islam" ? "selected" : "" }}>Islam</option>
                        <option value="Katolik" {{ $pegawai->agama === "Katolik" ? "selected" : "" }}>Katolik</option>
                        <option value="Protestan" {{ $pegawai->agama === "Protestan" ? "selected" : "" }}>Protestan</option>
                        <option value="Hindu" {{ $pegawai->agama === "Hindu" ? "selected" : "" }}>Hindu</option>
                        <option value="Buddha" {{ $pegawai->agama === "Buddha" ? "selected" : "" }}>Buddha</option>
                        <option value="Khonghucu" {{ $pegawai->agama === "Khonghucu" ? "selected" : "" }}>Khonghucu</option>
                      </select>
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

        </td>
        <td>
          <form action="{{ route('kelola-pegawai.destroy', ['id' => $pegawai->id]) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" name="submit" value="Hapus" class="btn btn-danger btn-sm">
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
