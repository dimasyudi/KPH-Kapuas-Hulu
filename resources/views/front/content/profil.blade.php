@extends('front.partials.layout')

@section('title')
Profil
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
                                <h2>Profil KPH Kapuas Hulu Selatan Unit XXI</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Banner Area End -->

<!-- About Start -->
<div class="about-area pb-155" style="margin-top:40px; margin-bottom:-18%;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="about-content">
                    <br>
                    <h2>VISI DAN MISI</h2>
                    <p>Visi KPH Kapuas Hulu Selatan Unit XXI merupakan tujuan jangka panjang yang akan dicapai pada masa akan datang, sebagai impian / keadaan dimasa akan datang yang menjadi cita-cita pengelola KPH Kapuas Hulu Selatan Unit XXI. Visi KPH Kapuas Hulu Selatan adalah Mewujudkan Kesejahteraan Masyarakat melalui Optimalisasi Pengelolaan Hutan yang Berkelanjutan dan Lestari.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="about-img">
                    <img src="{{ asset('front/img/about/about.jpg') }}" alt="about">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Service Start -->
<div class="service-area two pt-150 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-service">
                    <h3><a href="#">MISI</a></h3>
                    <p>Melaksanakan pengelolaan hutan produksi, hutan produksi terbatas, dan hutan lindung ditingkat tapak secara berkelanjutan, sebagai sumber penghidupan bagi kesejahteraan masyarakat, berbasiskan Ilmu Pengetahuan dan Teknologi Kehutanan.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-service">
                    <h3><a href="#">MISI</a></h3>
                    <p>Meningkatkan Sumber Daya Manusia parapihak (Swasta dan Masyarakat) dalam aspek akademis, teknis dan profesionalisme dengan loyalitas dan dedikasi tinggi dalam mengelola dan memanfaatkan hutan.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-service">
                    <h3><a href="#">MISI</a></h3>
                    <p>Meningkatkan taraf perekonomian masyarakat di dalam dan sekitar hutan, melalui program pemberdayaan masyarakat dalam pengelolaan dan pemanfaatan HHK dan HHBK secara berkelanjutan dan lestari.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
@endsection
