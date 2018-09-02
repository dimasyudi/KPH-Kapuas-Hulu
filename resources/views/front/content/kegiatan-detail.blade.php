@extends('front.partials.layout')

@section('title')
Kegiatan dan Aktivitas Detail
@endsection

@section('content')
<!-- Banner Area Start -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>Kegiatan dan Aktivitas Detail</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Banner Area End -->

<!-- Teacher Start -->
<div class="teacher-details-area pt-150 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="teacher-details-img">
                    <img src="{{ asset('uploads/kegiatan') }}/{{ $kegiatan->foto }}" alt="teacher">
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="teacher-details-content ml-50">
                    <h2>{{ $kegiatan->nama }}</h2>
                    <br>
                    <h4>Deskripsi :</h4>
                    <p>{{ $kegiatan->deskripsi }}</p>
                    <ul>
                        <li><span>Alamat : </span>{{ $kegiatan->alamat }}</li>
                        <li><span>Tanggal : </span>{{ date('d-m-Y', strtotime($kegiatan->tglmulai)) }}</li>
                        @if($kegiatan->tglselesai != '')
                        <li><span>Tanggal Selesai : </span>{{ date('d-m-Y', strtotime($kegiatan->tglselesai)) }}</li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Teacher End -->
@endsection
