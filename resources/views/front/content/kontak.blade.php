@extends('front.partials.layout')

@section('title')
Kontak Kami
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
                                <h2>Kontak Kami</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Banner Area End -->

<!-- Contact Start -->
<div class="contact-area pt-150 pb-140">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="contact-contents text-center">
                    <div class="single-contact mb-65">
                        <div class="contact-icon">
                            <img src="{{ asset('front/img/contact/contact1.png') }}" alt="contact">
                        </div>
                        <div class="contact-add">
                            <h3>Alamat</h3>
                            <p>Jalan Antasari No. 18 <br>Putussibau 78711</p>
                        </div>
                    </div>
                    <div class="single-contact">
                        <div class="contact-icon">
                            <img src="{{ asset('front/img/contact/contact3.png') }}" alt="contact">
                        </div>
                        <div class="contact-add">
                            <h3>Alamat Email</h3>
                            <p>kphkh.sunit21@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="reply-area">
                    <h3>TINGGALKAN PESAN</h3>
                    <p>Tinggalkan pesan / pengaduan anda secara langsung melalui form dibawah.</p>
                    <form id="" action="{{ route('kontak-kami.store') }}" method="post">
                      @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <p>Nama</p>
                                <input type="text" name="nama" id="name" required placeholder="Masukkan Nama Lengkap Anda">
                            </div>
                            <div class="col-md-12">
                                <p>Alamat Email</p>
                                <input type="text" name="email" id="email" required placeholder="Masukkan Alamat Email Anda">
                            </div>
                            <div class="col-md-12">
                                <p>Judul</p>
                                <input type="text" name="judul" id="subject" required placeholder="Judul">
                                <p>Isi Pesan</p>
                                <textarea name="isi" id="message" cols="15" rows="10" required placeholder="Isi Pesan"></textarea>
                            </div>
                        </div>
                        <input type="submit" name="submit" value="KIRIM PESAN" class="" style="background-color: #2C2B5E; color:#FFF; font-family: 'Open Sans', sans-serif; padding: 8px 25px; font-weight: 700;">
                        <p class="form-messege"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection
