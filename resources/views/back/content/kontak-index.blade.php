@extends('back.partials.layout')
@section('title')
Kelola Pengaduan
@endsection

@section('content')
<div class="panel-content">
  <div class="row">
    <h1>Kelola Pengaduan</h1>
  </div>
  <table class="table" id="myTable">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($kontaks as $kontak)
      <tr>
        <td>{{ $kontak->nama }}</td>
        <td>{{ $kontak->email }}</td>
        <td>{{ $kontak->judul }}</td>
        <td>{{ $kontak->isi }}</td>
        <td>
          <form style="display:inline;" action="{{ route('kelola-pengaduan.destroy', ['id' => $kontak->id]) }}" method="post">
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
