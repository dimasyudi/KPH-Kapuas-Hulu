@extends('front.partials.layout')

@section('title')
Kegiatan dan Aktivitas
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
                                <h2>Kegiatan dan Aktivitas</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Banner Area End -->

<!-- Event Start -->
<div class="event-area three text-center pt-150 pb-150">
    <div class="container">
        <div class="row">
          @foreach($kegiatans as $kegiatan)
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-event mb-60">
                    <div class="event-img">
                        <a href="{{ route('front.kegiatanDetail', ['id' => $kegiatan->id]) }}">
                            <img src="{{ asset('uploads/kegiatan') }}/{{ $kegiatan->foto }}" alt="event">
                            <div class="course-hover">
                                <i class="fa fa-link"></i>
                            </div>
                        </a>
                    </div>
                    <div class="event-content text-left">
                        <h4><a href="{{ route('front.kegiatanDetail', ['id' => $kegiatan->id]) }}">{{ $kegiatan->nama }}</a></h4>
                        <ul>
                            <li><span>Tanggal :</span> {{ date('d-m-Y', strtotime($kegiatan->tglmulai)) }}</li>
                            @if($kegiatan->tglselesai != '')
                            <li><span>Tanggal Selesai :</span> {{ date('d-m-Y', strtotime($kegiatan->tglselesai)) }}</li>
                            @endif
                            <li><span>Alamat :</span> {{ $kegiatan->alamat }}</li>
                        </ul>
                        <div class="event-content-right">
                            <a class="default-btn" href="{{ route('front.kegiatanDetail', ['id' => $kegiatan->id]) }}">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
          @endforeach
        </div>
    </div>
</div>
<!-- Event End -->
@endsection
