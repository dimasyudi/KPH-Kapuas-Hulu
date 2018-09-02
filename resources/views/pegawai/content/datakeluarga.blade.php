@extends('pegawai.partials.layout')
@section('title')
Kelola Data Keluarga
@endsection

@section('content')
@php
$jlhistri = App\DataKeluarga::where('nip', Auth::user()->nip)->where('status_keluarga', 'Istri')->first();
@endphp
<div class="panel-content">
  <div class="row">
    <h1>Kelola Data Keluarga {{ $jlhistri->nama }}</h1>
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
            <form action="{{ route('data-keluarga.store', ['id' => $user->id]) }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" required placeholder="Nama Lengkap" class="form-control">
              </div>
              <div class="form-group">
                <label>Status Dalam Keluarga</label>
                <div class="clearfix"></div>
                <select class="form-control" name="status">
                  <option value="Suami">Suami</option>
                  @if($jlhistri == null)
                  <option value="Istri">Istri</option>
                  @else
                  <option value="Istri 2">Istri</option>
                  @endif
                  <option value="Anak">Anak</option>
                </select>
              </div>
              <div class="form-group">
                <label>Tempat Tanggal Lahir</label>
                <input type="text" name="ttl" required placeholder="Pontianak, 17 Agustus 1960" class="form-control">
              </div>
              <div class="form-group">
                <label>Status Menikah</label>
                <div class="clearfix"></div>
                <select class="form-control" name="menikah">
                  <option value="Belum Menikah">Belum Menikah</option>
                  <option value="Sudah Menikah">Sudah Menikah</option>
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
        <th>Nama Lengkap</th>
        <th>Status Dalam Keluarga</th>
        <th>TTL</th>
        <th>Status Menikah</th>
        <th>Ubah</th>
        <th>Hapus</th>
      </tr>
    </thead>
    <tbody>
      @foreach($keluargas as $keluarga)
      <tr>
        <td>{{ $keluarga->nama }}</td>
        <td>{{ $keluarga->status }}</td>
        <td>{{ $keluarga->ttl }}</td>
        <td>{{ $keluarga->menikah }}</td>
        <td>
          <a href="{{ route('data-keluarga.edit', ['id' => $user->id, 'data_keluarga' => $keluarga->id]) }}" class="btn btn-info btn-sm">Ubah</a>
        </td>
        <td>
          <form action="{{ route('data-keluarga.destroy', ['id' => $user->id, 'data_keluarga' => $keluarga->id]) }}" method="post">
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
