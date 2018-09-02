@extends('front.partials.layout')

@section('title')
Berita
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
                                <h2>Berita</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Banner Area End -->

<!-- Blog Start -->
<div class="blog-area pt-150 pb-150">
    <div class="container">
        <div class="row">
          @foreach($beritas as $berita)
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-blog mb-60">
                    <div class="blog-img">
                        <a href="{{ route('front.beritaDetail', ['id' => $berita->id]) }}"><img src="{{ asset('uploads/berita') }}/{{ $berita->foto }}" alt="blog"></a>
                        <div class="blog-hover">
                            <i class="fa fa-link"></i>
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-top">
                            <p>Dipost oleh {{ $berita->user->name }}  / {{ date('d-m-Y', strtotime($berita->created_at))}}</p>
                        </div>
                        <div class="blog-bottom">
                            <h2><a href="{{ route('front.beritaDetail', ['id' => $berita->id]) }}">{{ $berita->judul }}</a></h2>
                            <a href="{{ route('front.beritaDetail', ['id' => $berita->id]) }}">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
          @endforeach
        </div>
    </div>
</div>
<!-- Blog End -->
@endsection

@section('custom_js')
@endsection
