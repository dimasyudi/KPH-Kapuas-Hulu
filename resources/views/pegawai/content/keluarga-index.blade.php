@extends('pegawai.partials.layout')
@section('title')
Kelola Data Keluarga
@endsection

@section('content')
  @php
  $jlhistri = App\DataKeluarga::where('nip', Auth::user()->nip)->where('status_keluarga', 'Istri')->get()->count();
  @endphp
<div class="panel-content">
  <div class="row">
    <h1>Kelola Data Keluarga</h1>
  </div>
  <div class="row" style="margin-bottom:20px;">

    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Tambah Data Keluarga</button>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Form Tambah Data Keluarga</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="{{ route('kelola-data-keluarga-saya.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="nip" value="{{$pegawai->nip}}">
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" required placeholder="Nama Lengkap" class="form-control">
              </div>
              <div class="form-group">
                <label>Status Kekeluargaan</label>
                <br>
                <select name="status_keluarga">
                  <option value="Suami">Suami</option>
                  @if($jlhistri == 1)
                  <option value="Istri 2">Istri</option>
                  @else
                  <option value="Istri">Istri</option>
                  @endif
                  <option value="Anak">Anak</option>
                </select>
              </div>
              <div class="form-group">
                <label>TTL</label>
                <input type="text" name="ttl" required placeholder="Pontianak, 10 September 1996" class="form-control">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <br>
                <select name="jenis_kelamin">
                  <option value="Laki Laki">Laki Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label>Agama</label>
                <br>
                <select name="agama">
                  <option value="Islam">Islam</option>
                  <option value="Katolik">Katolik</option>
                  <option value="Protestan">Protestan</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Buddha">Buddha</option>
                  <option value="Khonghucu">Khonghucu</option>
                </select>
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" required placeholder="Alamat Lengkap" class="form-control">
              </div>
              <div class="form-group">
                <label>Pekerjaan</label>
                <input type="text" name="pekerjaan" required placeholder="Pekerjaan" class="form-control">
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
  <br>
  @php
  $jlhanak = App\DataKeluarga::where('nip', $pegawai->nip)->where('status_keluarga', 'Anak')->get()->count();
  @endphp
  <h3>Jumlah Anak : {{ $jlhanak }}</h3>
  <br>
  <table class="table" id="myTable">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Status Keluarga</th>
        <th>TTL</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Alamat</th>
        <th>Pekerjaan</th>
        <th>Edit</th>
        <th>Hapus</th>
      </tr>
    </thead>
    <tbody>
      @foreach($keluargas as $keluarga)
      <tr>
        <td>{{ $keluarga->nama }}</td>
        <td>{{ $keluarga->status_keluarga }}</td>
        <td>{{ $keluarga->ttl }}</td>
        <td>{{ $keluarga->jenis_kelamin }}</td>
        <td>{{ $keluarga->agama }}</td>
        <td>{{ $keluarga->alamat }}</td>
        <td>{{ $keluarga->pekerjaan }}</td>

        <td>

          <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal{{ $keluarga->id }}">Ubah</button>

          <!-- Modal -->
          <div id="myModal{{ $keluarga->id }}" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Form Ubah Data Keluarga</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <form action="{{ route('kelola-data-keluarga-saya.update', ['id' => $keluarga->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="nip" value="{{$pegawai->nip}}">
                    <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" name="nama" required placeholder="Nama Lengkap" class="form-control" style="width:95%" value="{{ $keluarga->nama }}">
                    </div>
                    <div class="form-group">
                      <label>Status Kekeluargaan</label>
                      <br>
                      <select name="status_keluarga">
                        <option value="Suami" {{ $keluarga->status_keluarga === "Suami" ? "selected" : "" }}>Suami</option>
                        <option value="Istri" {{ $keluarga->status_keluarga === "Istri" ? "selected" : "" }}>Istri</option>
                        <option value="Anak" {{ $keluarga->status_keluarga === "Anak" ? "selected" : "" }}>Anak</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>TTL</label>
                      <input type="text" name="ttl" required placeholder="Pontianak, 10 September 1996" class="form-control" style="width:95%" value="{{ $keluarga->ttl }}">
                    </div>
                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <br>
                      <select name="jenis_kelamin">
                        <option value="Laki Laki" {{ $keluarga->jenis_kelamin === "Laki Laki" ? "selected" : "" }}>Laki Laki</option>
                        <option value="Perempuan" {{ $keluarga->jenis_kelamin === "Perempuan" ? "selected" : "" }}>Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Agama</label>
                      <br>
                      <select name="agama">
                        <option value="Islam" {{ $keluarga->agama === "Islam" ? "selected" : "" }}>Islam</option>
                        <option value="Katolik" {{ $keluarga->agama === "Katolik" ? "selected" : "" }}>Katolik</option>
                        <option value="Protestan" {{ $keluarga->agama === "Protestan" ? "selected" : "" }}>Protestan</option>
                        <option value="Hindu" {{ $keluarga->agama === "Hindu" ? "selected" : "" }}>Hindu</option>
                        <option value="Buddha" {{ $keluarga->agama === "Buddha" ? "selected" : "" }}>Buddha</option>
                        <option value="Khonghucu" {{ $keluarga->agama === "Khonghucu" ? "selected" : "" }}>Khonghucu</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="text" name="alamat" required placeholder="Alamat Lengkap" class="form-control" style="width:95%" value="{{ $keluarga->alamat }}">
                    </div>
                    <div class="form-group">
                      <label>Pekerjaan</label>
                      <input type="text" name="pekerjaan" required placeholder="Pekerjaan" class="form-control" style="width:95%" value="{{ $keluarga->pekerjaan }}">
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
          <form action="{{ route('kelola-data-keluarga.destroy', ['id' => $keluarga->id]) }}" method="post">
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
