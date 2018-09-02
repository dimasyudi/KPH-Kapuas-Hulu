@extends('back.partials.layout')
@section('title')
Kelola Data Pendidikan
@endsection

@section('content')
<div class="panel-content">
  <div class="row">
    <h1>Kelola Data Pendidikan</h1>
  </div>
  <div class="row" style="margin-bottom:20px;">

    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Tambah Data Pendidikan</button>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Form Tambah Data Pendidikan</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="{{ route('kelola-data-pendidikan.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>Nama Pegawai</label>
                <br>
                <select name="nip">
                  @foreach($pegawais as $pegawai)
                  <option value="{{ $pegawai->nip }}">{{ $pegawai->nama }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Pendidikan Formal</label>
                <input type="text" name="pendidikan_formal" required placeholder="Pendidikan Formal" class="form-control">
              </div>
              <div class="form-group">
                <label>Tahun</label>
                <input type="text" name="tahun" required placeholder="Tahun" class="form-control">
              </div>
              <div class="form-group">
                <label>No. Ijazah</label>
                <input type="text" name="no_ijazah" required placeholder="No. Ijazah" class="form-control">
              </div>
              <div class="form-group">
                <label>Institusi</label>
                <input type="text" name="institusi" required placeholder="Institusi" class="form-control">
              </div>
              <div class="form-group">
                <label>Lokasi</label>
                <input type="text" name="lokasi" required placeholder="Lokasi" class="form-control">
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
        <th>Nama</th>
        <th>Pendidikan Formal</th>
        <th>Tahun</th>
        <th>No Ijazah</th>
        <th>Institusi</th>
        <th>Lokasi</th>
        <th>Edit</th>
        <th>Hapus</th>
      </tr>
    </thead>
    <tbody>
      @foreach($pendidikans as $pendidikan)
        @php
        $pegawai = App\Pegawai::where('nip', $pendidikan->nip)->first();
        @endphp
      <tr>
        <td>{{ $pegawai->nama }}</td>
        <td>{{ $pendidikan->pendidikan_formal }}</td>
        <td>{{ $pendidikan->tahun }}</td>
        <td>{{ $pendidikan->no_ijazah }}</td>
        <td>{{ $pendidikan->institusi }}</td>
        <td>{{ $pendidikan->lokasi }}</td>
        <td>

          <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal{{ $pendidikan->id }}">Ubah</button>

          <!-- Modal -->
          <div id="myModal{{ $pendidikan->id }}" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Form Ubah Data Pendidikan</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <form action="{{ route('kelola-data-pendidikan.update', ['id' => $pendidikan->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                      <label>Nama Pegawai</label>
                      <br>
                      <select name="nip">
                        @foreach($pegawais as $pegawai)
                        <option value="{{ $pegawai->nip }}" {{ $pegawai->nip === $pendidikan->nip ? "selected" : "" }}>{{ $pegawai->nama }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Pendidikan Formal</label>
                      <input type="text" name="pendidikan_formal" required placeholder="Pendidikan Formal" class="form-control" style="width: 95%;" value="{{ $pendidikan->pendidikan_formal }}">
                    </div>
                    <div class="form-group">
                      <label>Tahun</label>
                      <input type="text" name="tahun" required placeholder="Tahun" class="form-control" style="width: 95%;" value="{{ $pendidikan->tahun }}">
                    </div>
                    <div class="form-group">
                      <label>No. Ijazah</label>
                      <input type="text" name="no_ijazah" required placeholder="No. Ijazah" class="form-control" style="width: 95%;" value="{{ $pendidikan->no_ijazah }}">
                    </div>
                    <div class="form-group">
                      <label>Institusi</label>
                      <input type="text" name="institusi" required placeholder="Institusi" class="form-control" style="width: 95%;" value="{{ $pendidikan->institusi }}">
                    </div>
                    <div class="form-group">
                      <label>Lokasi</label>
                      <input type="text" name="lokasi" required placeholder="Lokasi" class="form-control" style="width: 95%;" value="{{ $pendidikan->lokasi }}">
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
          <form action="{{ route('kelola-data-pendidikan.destroy', ['id' => $pendidikan->id]) }}" method="post">
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
