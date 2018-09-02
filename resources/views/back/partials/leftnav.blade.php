<header class="side-header expand-header">
    <div class="nav-head">Menu
        <span class="menu-trigger">
            <i class="ion-android-menu"></i>
        </span>
    </div>
    <nav class="custom-scrollbar">
        <ul class="drp-sec">
            <li>
                <a href="/admin" title="">
                    <i class="ion-home"></i> Beranda</a>
            </li>
            @if(Auth::user()->admin == 1)
            <li>
                <a href="/admin/kelola-berita" title="">
                    <i class="ion-android-clipboard"></i> Kelola Berita</a>
            </li>
            <li>
                <a href="/admin/kelola-galeri" title="">
                    <i class="ion-images"></i> Kelola Galeri</a>
            </li>
            <li>
                <a href="/admin/kelola-kegiatan" title="">
                    <i class="ion-briefcase"></i> Kelola Kegiatan</a>
            </li>
            <li>
                <a href="/admin/kelola-pengaduan" title="">
                    <i class="ion-podium"></i> Kelola Pengaduan</a>
            </li>
            @endif

            

            @if(Auth::user()->admin == 2)
            <li>
                <a href="/admin/kelola-akun" title="">
                    <i class="ion-android-people"></i> Kelola Akun</a>
            </li>
            <li>
                <a href="/admin/kelola-hak-akses" title="">
                    <i class="ion-android-settings"></i> Kelola Hak Akses</a>
            </li>
            <li>
                <a href="/admin/kelola-pegawai" title="">
                    <i class="ion-person"></i> Kelola Data Pegawai</a>
            </li>
            <li>
                <a href="/admin/kelola-data-keluarga" title="">
                    <i class="ion-images"></i> Kelola Data Keluarga</a>
            </li>
            <li>
                <a href="/admin/kelola-data-pendidikan" title="">
                    <i class="ion-briefcase"></i> Kelola Data Pendidikan</a>
            </li>
            <li>
                <a href="/admin/kelola-data-golongan" title="">
                    <i class="ion-clipboard"></i> Kelola Data Golongan</a>
            </li>
            @endif

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
