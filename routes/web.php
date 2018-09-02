<?php

Route::get('/', 'PagesController@index')->name('front.home');

Route::get('/profil', 'PagesController@profil')->name('front.profil');

Route::get('/berita', 'PagesController@berita')->name('front.berita');
Route::get('/berita/{id}', 'PagesController@beritaDetail')->name('front.beritaDetail');

Route::get('/galeri', 'PagesController@galeri')->name('front.galeri');

Route::get('/kegiatan-aktivitas', 'PagesController@kegiatan')->name('front.kegiatan');
Route::get('/kegiatan-aktivitas/{id}', 'PagesController@kegiatanDetail')->name('front.kegiatanDetail');

Route::resource('/kontak-kami', 'KontakController');

Route::get('/pilihan-login', 'PagesController@pilihanLogin')->name('front.pilihanLogin');

Auth::routes();

// ----------------------------------------------------------------------------------

Route::resource('/admin/kelola-berita', 'AdminBeritaController');

Route::resource('/admin/kelola-kegiatan', 'AdminKegiatanController');

Route::resource('/admin/kelola-pengaduan', 'AdminKontakController');

Route::resource('/admin/kelola-galeri', 'AdminGaleriController');

Route::resource('/admin/kelola-akun', 'AdminAkunController');

Route::resource('/admin/kelola-pegawai', 'AdminPegawaiController');

Route::resource('/admin/kelola-hak-akses', 'AdminHakAksesController');

Route::resource('/admin/kelola-data-keluarga', 'AdminKeluargaController');

Route::resource('/admin/kelola-data-pendidikan', 'AdminDataPendidikanController');

Route::resource('/admin/kelola-data-golongan', 'AdminDataGolonganController');

Route::get('/admin', 'AdminPagesController@index')->name('admin.home');

// -------------------------------------------------------------------------------------------

Route::resource('/pegawai/kelola-data-pegawai-saya', 'PegawaiPegawaiController');
Route::resource('/pegawai/kelola-data-keluarga-saya', 'PegawaiKeluargaController');
Route::resource('/pegawai/kelola-data-pendidikan-saya', 'PegawaiPendidikanController');
Route::resource('/pegawai/kelola-data-golongan-saya', 'PegawaiGolonganController');

Route::get('/pegawai/edit-profil/{id}', 'PegawaiPagesController@editProfil')->name('pegawai.editProfil');
Route::put('/pegawai/edit-profil/{id}', 'PegawaiPagesController@editProfilSubmit')->name('pegawai.editProfil.submit');
Route::put('/pegawai/edit-password/{id}', 'PegawaiPagesController@editPasswordSubmit')->name('pegawai.editPassword.submit');
Route::get('/pegawai', 'PegawaiPagesController@index')->name('pegawai.home');
