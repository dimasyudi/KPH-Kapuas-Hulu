@extends('back.partials.layout')
@section('title')
Kelola Data Golongan
@endsection

@section('content')
<div class="panel-content">
  <div class="row">
    <h1>Kelola Data Golongan</h1>
  </div>
  <div class="row" style="margin-bottom:20px;">

    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Tambah Data Golongan</button>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Form Tambah Data Golongan</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="{{ route('kelola-data-golongan.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>Nama Pegawai</label>
                <br>
                <select name="nip">
                  @foreach($pegawais as $pegawai)
                  <option value="{{ $pegawai->nip }}">{{ $pegawai->nama }}</option>
                  @endforeach
                </select>
                <div class="form-group">
                  <label>TMT CPNS</label>
                  <input type="date" name="tmt_cpns" required class="form-control">
                </div>
                <div class="form-group">
                  <label>TMT PNS</label>
                  <input type="date" name="tmt_pns" required class="form-control">
                </div>
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
                <div class="form-group">
                  <label>Jabatan</label>
                  <input type="text" name="golongan" required class="form-control">
                </div>
                <div class="form-group">
                  <label>Eselon</label>
                  <input type="text" name="eselon" required class="form-control">
                </div>
                <div class="form-group">
                  <label>Kenaikan Gaji Berkala</label>
                  <input type="date" name="gajiberkala" class="form-control">
                </div>
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
        <th>TMT CPNS</th>
        <th>TMT PNS</th>
        <th>Pangkat / Golongan</th>
        <th>Jabatan</th>
        <th>Eselon</th>
        <th>Gaji Berkala</th>
        <th>Edit</th>
        <th>Hapus</th>
      </tr>
    </thead>
    <tbody>
      @foreach($golongans as $golongan)
        @php
        $pegawai = App\Pegawai::where('nip', $golongan->nip)->first();
        @endphp
      <tr>
        <td>{{ $pegawai->nama }}</td>
        <td>{{ date('d-m-Y', strtotime($golongan->tmt_cpns)) }}</td>
        <td>{{ date('d-m-Y', strtotime($golongan->tmt_pns)) }}</td>
        <td>{{ $golongan->pangkat }}</td>
        <td>{{ $golongan->golongan }}</td>
        <td>{{ $golongan->eselon }}</td>
        <td>{{ date('d-m-Y', strtotime($golongan->gajiberkala)) }}</td>
        <td>

          <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal{{ $golongan->id }}">Ubah</button>

          <!-- Modal -->
          <div id="myModal{{ $golongan->id }}" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Form Ubah Data Golongan</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <form action="{{ route('kelola-data-golongan.update', ['id' => $golongan->id ]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                      <label>Nama Pegawai</label>
                      <br>
                      <select name="nip">
                        @foreach($pegawais as $pegawai)
                        <option value="{{ $pegawai->nip }}" {{ $pegawai->nip === $golongan->nip ? "selected" : "" }}>{{ $pegawai->nama }}</option>
                        @endforeach
                      </select>
                      <div class="form-group">
                        <label>TMT CPNS</label>
                        <input type="date" name="tmt_cpns" required class="form-control" style="width:95%;" value="{{ $golongan->tmt_cpns }}">
                      </div>
                      <div class="form-group">
                        <label>TMT PNS</label>
                        <input type="date" name="tmt_pns" required class="form-control" style="width:95%;" value="{{ $golongan->tmt_pns }}">
                      </div>
                      <div class="form-group">
                        <label>Pangkat / Golongan</label>
                        <input type="text" name="pangkat" required class="form-control" style="width:95%;" value="{{ $golongan->pangkat }}">
                      </div>
                      <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" name="golongan" required class="form-control" style="width:95%;" value="{{ $golongan->golongan }}">
                      </div>
                      <div class="form-group">
                        <label>Eselon</label>
                        <input type="text" name="eselon" required class="form-control" style="width:95%;" value="{{ $golongan->eselon }}">
                      </div>
                      <div class="form-group">
                        <label>Kenaikan Gaji Berkala</label>
                        <input type="date" name="gajiberkala" class="form-control" style="width:95%;" value="{{ $golongan->gajiberkala }}">
                      </div>
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
          <form action="{{ route('kelola-data-golongan.destroy', ['id' => $golongan->id]) }}" method="post">
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
