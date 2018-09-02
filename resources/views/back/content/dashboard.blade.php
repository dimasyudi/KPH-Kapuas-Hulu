@extends('back.partials.layout')
@section('title')
Beranda
@endsection

@section('content')
<div class="pg-tp">
    <div class="pr-tp-inr">
        <h4>Selamat Datang di halaman
          @if(Auth::user()->admin == 1)
            <strong>Admin Panel</strong>
          @else
            <strong>Panel Operator Data Pegawai</strong>
          @endif
    </div>
    <br>
    <div class="row grid-wrap mrg20">
    <div class="col-md-4 grid-item col-sm-6 col-lg-3">
        <div class="stat-box widget bg-clr1">
            <i class="ion-android-clipboard"></i>
            <div class="stat-box-innr">
                <span>
                    <i class="counter">{{ $jlhberita }}</i>
                </span>
                <h5>Jumlah Berita</h5>
                <br>
            </div>
            <span></span>
        </div>
    </div>
    <div class="col-md-4 grid-item col-sm-6 col-lg-3">
        <div class="stat-box widget bg-clr2">
            <i class="ion-briefcase"></i>
            <div class="stat-box-innr">
                <span>
                    <i class="counter">{{ $jlhkegiatan }}</i></span>
                <h5>Jumlah Kegiatan</h5>
                <br>
            </div>
            <span></span>
        </div>
    </div>
    <div class="col-md-4 grid-item col-sm-6 col-lg-3">
        <div class="stat-box widget bg-clr3">
            <i class="ion-images"></i>
            <div class="stat-box-innr">
                <span>
                    <i class="counter">{{ $jlhfoto }}</i>
                </span>
                <h5>Jumlah Foto</h5>
                <br>
            </div>
            <span></span>
        </div>
    </div>
    <div class="col-md-4 grid-item col-sm-6 col-lg-3">
        <div class="stat-box widget bg-clr4">
            <i class="ion-podium"></i>
            <div class="stat-box-innr">
                <span>
                    <i class="counter">{{ $jlhpengaduan }}</i>
                </span>
                <h5>Jumlah Pengaduan</h5>
                <br>
            </div>
            <span></span>
        </div>
    </div>
</div>
</div>
<!-- Page Top -->

<div class="panel-content">
</div>
@endsection
