<header class="top">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="header-top-left">
                        <p>Selamat Datang di Website KPH Kapuas Hulu Selatan </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="header-top-right text-right">
                        <ul>
                            @guest
                            <li><a href="/login">Masuk</a></li>
                            @endguest

                            @auth
                            <li><a href="#">Halo {{ Auth::user()->name }}</a></li>
                            <li>
                              <a href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                 Keluar
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                            </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <div class="header-area two header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="logo">
            <a href="/"><img src="{{ asset('front/img/logo/logo2.png') }}" alt="eduhome" /></a>
          </div>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-6">
          <div class="content-wrapper text-right">
              <!-- Main Menu Start -->
              <div class="main-menu">
                  <nav>
                      <ul>
                          <li><a href="/">Beranda</a>
                          <li><a href="/profil">Profil</a>
                          <li><a href="/berita">Berita</a>
                          <li><a href="/galeri">Galeri</a>
                          <li><a href="/kegiatan-aktivitas">Kegiatan & Aktivitas</a>
                          <li><a href="/kontak-kami">Kontak Kami</a>
                          @auth
                            @if(Auth::user()->admin == 1)
                            <li><a href="/admin">Admin Panel</a>
                            @endif
                            @if(Auth::user()->admin == 0)
                            <li><a href="/pegawai">Panel Pegawai</a>
                            @endif
                          @endauth
                      </ul>
                  </nav>
              </div>
              <!-- Main Menu End -->
          </div>
        </div>
        <div class="col-xs-12">
            <div class="mobile-menu hidden-lg hidden-md hidden-sm"></div>
        </div>
    </div>
  </div>
</div>
</header>
