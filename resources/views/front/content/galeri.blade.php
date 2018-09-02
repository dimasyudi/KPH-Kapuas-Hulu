@extends('front.partials.layout')

@section('title')
Galeri Foto
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
                                <h2>Galeri Foto</h2>
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
          @foreach($galeris as $galeri)
          <div class="col-md-4" style="margin-bottom:50px;">
            <a href="{{ asset('uploads/galeri') }}/{{ $galeri->foto }}" class="lighterbox">
              <img src="{{ asset('uploads/galeri') }}/{{ $galeri->foto }}" />
              <h2 class="lighterbox-title">{{ $galeri->nama }}</h2>
              <span class="lighterbox-desc">Dipost oleh : {{ $galeri->user->name }}</span>
            </a>
          </div>
          @endforeach
        </div>
    </div>
</div>
<!-- Event End -->
@endsection

@section('custom_js')
<script type="text/javascript">
$(".lighterbox").lighterbox({ overlayColor : "white" });
</script>
@endsection
