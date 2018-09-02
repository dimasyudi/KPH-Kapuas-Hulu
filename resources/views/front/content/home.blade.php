@extends('front.partials.layout')

@section('title')
Beranda
@endsection

@section('content')
<!-- Background Area Start -->
    <section id="slider-container" class="slider-area two">
        <div class="slider-owl owl-theme owl-carousel">
            <!-- Start Slingle Slide -->
            <div class="single-slide item" style="background-image: url({{ asset('front/img/slider/home-slider.jpg') }})">
                <!-- Start Slider Content -->
                <div class="slider-content-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="slide-content-wrapper">
                                    <div class="slide-content text-center">
                                        <h2>KPH Kapuas Hulu Selatan</h2>
                                        <h2>UNIT XXI</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Slider Content -->
            </div>
            <!-- End Slingle Slide -->
            <!-- Start Slingle Slide -->
            <div class="single-slide item" style="background-image: url({{ asset('front/img/slider/home-slider.jpg') }})">
                <!-- Start Slider Content -->
                <div class="slider-content-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="slide-content-wrapper">
                                    <div class="slide-content text-center">
                                      <h2>KPH Kapuas Hulu Selatan</h2>
                                      <h2>UNIT XXI</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Slider Content -->
            </div>
            <!-- End Slingle Slide -->
        </div>
    </section>
<!-- Background Area End -->

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
    <!-- Courses Area Start -->
    <div class="courses-area two pt-150 pb-150 text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title">
                        <img src="{{ asset('front/img/icon/section1.png') }}" alt="section-title">
                        <h2>Berita Terbaru</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($beritaterbarus as $berita)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-course">
                        <div class="course-img">
                            <a href="{{ route('front.beritaDetail', ['id' => $berita->id]) }}"><img src="{{ asset('uploads/berita') }}/{{ $berita->foto }}" alt="course">
                                <div class="course-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="course-content">
                            <h3><a href="{{ route('front.beritaDetail', ['id' => $berita->id]) }}">{{ $berita->judul }}</a></h3>
                            <p>{{ str_limit($berita->isi, 200) }}</p>
                            <a class="default-btn" href="{{ route('front.beritaDetail', ['id' => $berita->id]) }}">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Courses Area End -->

    <!-- Event Area Start -->
    <div class="event-area two text-center pt-100 pb-145">
        <div class="container">
            <div class="row">
                 <div class="col-xs-12">
                    <div class="section-title">
                        <img src="{{ asset('front/img/icon/section.png') }}" alt="section-title">
                        <h2>Kegiatan dan Aktivitas Terbaru</h2>
                    </div>
                </div>
            </div>
            <div class="row">
              @foreach($kegiatanterbarus as $kegiatan)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="{{ route('front.kegiatanDetail', ['id' => $kegiatan->id]) }}"><img src="{{ asset('uploads/kegiatan') }}/{{ $kegiatan->foto }}" alt="blog"></a>
                            <div class="blog-hover">
                                <a href="{{ route('front.kegiatanDetail', ['id' => $kegiatan->id]) }}"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-top">
                                <p>Tanggal Acara {{ date('d-m-Y', strtotime($kegiatan->tglmulai ))}}</p>
                            </div>
                            <div class="blog-bottom">
                                <h2><a href="{{ route('front.kegiatanDetail', ['id' => $kegiatan->id]) }}">{{ $kegiatan->nama }}</a></h2>
                                <a href="{{ route('front.kegiatanDetail', ['id' => $kegiatan->id]) }}">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
              @endforeach
            </div>
        </div>
    </div>
    <!-- Event Area End -->

    <!-- Testimonial Area Start -->
    <div class="testimonial-area pt-110 pb-105 text-center">
        <div class="container">
            <div class="row">
                <div class="testimonial-owl owl-theme owl-carousel">
                    <div class="col-md-8 col-md-offset-2 col-sm-12">
                        <div class="single-testimonial">
                            <div class="testimonial-info">
                                <div class="testimonial-img">
                                    <img src="{{ asset('front/img/testimonial/testimonial.jpg') }}" alt="testimonial">
                                </div>
                                <div class="testimonial-content">
                                    <p>Sangat bermanfaat dan banyak informasi yang bisa didapat dari website KPH Kapuas Hulu Selatan Unit XXI ini. Saya bisa melihat Berita dan juga Kegiatan seputar KPH Kapuas Hulu Selatan Unit XXI</p>
                                    <h4>Syarif Ishak</h4>
                                    <h5>Masyarakat</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Area End -->
@endsection
