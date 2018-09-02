<header class="side-header expand-header">
    <div class="nav-head">Menu
        <span class="menu-trigger">
            <i class="ion-android-menu"></i>
        </span>
    </div>
    <nav class="custom-scrollbar">
        <ul class="drp-sec">
            <li>
                <a href="/pegawai" title="">
                    <i class="ion-home"></i> Beranda</a>
            </li>
            <li>
                <a href="/pegawai/kelola-data-pegawai-saya" title="">
                  <i class="ion-person"></i> Kelola Data Pegawai</a>
            </li>
            <li>
                <a href="/pegawai/kelola-data-keluarga-saya" title="">
                  <i class="ion-android-people"></i> Kelola Daftar Keluarga</a>
            </li>
            <li>
                <a href="/pegawai/kelola-data-pendidikan-saya" title="">
                  <i class="ion-briefcase"></i> Kelola Data Pendidikan</a>
            </li>
            <li>
                <a href="/pegawai/kelola-data-golongan-saya" title="">
                  <i class="ion-android-clipboard"></i> Kelola Data Golongan</a>
            </li>
            <li>
              <a href="/pegawai/edit-profil/{{ Auth::user()->id }}" title="">
                <i class="ion-android-contact"></i> Ubah Password Akun</a>
            </li>
            <li>
                    <a class="" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                     <i class="ion-close"></i> Keluar</a>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
            </li>
        </ul>
    </nav>
</header>
