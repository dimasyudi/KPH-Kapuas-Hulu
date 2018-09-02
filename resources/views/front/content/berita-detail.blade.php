@extends('front.partials.layout')

@section('title')
Berita Detail
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
                                <h2>Berita Detail</h2>
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
                    <img src="{{ asset('uploads/berita') }}/{{ $berita->foto }}" alt="teacher">
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="teacher-details-content ml-50">
                    <h2>{{ $berita->judul }}</h2>
                    <br>
                    <h4>Isi Berita :</h4>
                    <p>{{ $berita->isi }}</p>
                    <ul>
                        <li><span>Dipost Oleh : </span>{{ $berita->user->name }}</li>
                        <li><span>Tanggal : </span>{{ date('d-m-Y', strtotime($berita->created_at)) }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Teacher End -->
@endsection
