@extends('back.partials.layout')
@section('title')
Kelola Akun
@endsection

@section('content')
<div class="panel-content">
  <div class="row">
    <h1>Kelola Akun</h1>
  </div>
  <div class="row" style="margin-bottom:20px;">

    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Tambah Akun</button>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Form Tambah Akun</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="{{ route('kelola-akun.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>NIP</label>
                <input type="text" name="nip" placeholder="Nomor Induk Pegawai" class="form-control" style="width: 95%">
              </div>
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="name" required placeholder="Nama Lengkap" class="form-control" style="width: 95%">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required placeholder="Alamat Email" class="form-control" style="width: 95%">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required class="form-control" style="width: 95%">
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
        <th>Email</th>
        <th>Role</th>
        <th>Edit</th>
        <th>Hapus</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>

        @if($user->nip != '')
        <td>{{ $user->nip }}</td>
        @else
        <td>-</td>
        @endif

        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>

        @if($user->admin == 1)
        <td>Administrator</td>
        @elseif($user->admin == 2)
        <td>Operator</td>
        @else
        <td>Pegawai</td>
        @endif

        <td>
          <!-- Trigger the modal with a button -->
          <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal{{ $user->id }}">Edit</button>

          <!-- Modal -->
          <div id="myModal{{ $user->id }}" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Form Tambah Akun</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <form action="{{ route('kelola-akun.update', ['id' => $user->id ]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                      <label>NIP</label>
                      <input type="text" name="nip" placeholder="Nomor Induk Pegawai" class="form-control" value="{{ $user->nip }}" style="width: 95%">
                    </div>
                    <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" name="name" required placeholder="Nama Lengkap" class="form-control" value="{{ $user->name }}" style="width: 95%">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" required placeholder="Alamat Email" class="form-control" value="{{ $user->email }}" style="width: 95%">
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
          <form action="{{ route('kelola-akun.destroy', ['id' => $user->id]) }}" method="post">
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
