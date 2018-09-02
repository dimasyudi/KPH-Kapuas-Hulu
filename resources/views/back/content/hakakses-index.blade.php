@extends('back.partials.layout')
@section('title')
Kelola Hak Akses
@endsection

@section('content')
<div class="panel-content">
  <div class="row">
    <h1>Kelola Hak Akses</h1>
  </div>
  <br>
  <table class="table" id="myTable">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Alamat Email</th>
        <th>Hak Akses</th>
        <th>Jadikan Admin</th>
        <th>Jadikan Operator</th>
        <th>Jadikan Pegawai</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        @if($user->admin == 1)
        <td>Administrator Website</td>
        <td><a href="#" class="btn btn-success disabled btn-sm" style="cursor: not-allowed;">Jadikan Admin</a></td>
        <td>
          <form action="{{ route('kelola-hak-akses.update', ['id' => $user->id]) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="admin" value="2">
            <input type="submit" name="submit" value="Jadikan Operator" class="btn btn-warning btn-sm">
          </form>
        </td>
        <td>
          <form action="{{ route('kelola-hak-akses.update', ['id' => $user->id]) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="admin" value="0">
            <input type="submit" name="submit" value="Jadikan Pegawai" class="btn btn-primary btn-sm">
          </form>
        </td>
        @elseif($user->admin == 2)
        <td>Operator Data Pegawai</td>
        <td>
          <form action="{{ route('kelola-hak-akses.update', ['id' => $user->id]) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="admin" value="1">
            <input type="submit" name="submit" value="Jadikan Admin" class="btn btn-primary btn-sm">
          </form>
        </td>
        <td><a href="#" class="btn btn-warning disabled btn-sm" style="cursor: not-allowed;">Jadikan Operator</a></td>
        <td>
          <form action="{{ route('kelola-hak-akses.update', ['id' => $user->id]) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="admin" value="0">
            <input type="submit" name="submit" value="Jadikan Pegawai" class="btn btn-primary btn-sm">
          </form>
        </td>
        @else
        <td>Pegawai</td>
        <td>
          <form action="{{ route('kelola-hak-akses.update', ['id' => $user->id]) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="admin" value="1">
            <input type="submit" name="submit" value="Jadikan Admin" class="btn btn-success btn-sm">
          </form>
        </td>
        <td>
          <form action="{{ route('kelola-hak-akses.update', ['id' => $user->id]) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="admin" value="2">
            <input type="submit" name="submit" value="Jadikan Operator" class="btn btn-warning btn-sm">
          </form>
        </td>
        <td>
          <a href="#" class="btn btn-primary disabled btn-sm" style="cursor: not-allowed;">Jadikan Pegawai</a>
        </td>
        @endif
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
