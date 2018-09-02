<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Galeri;
use App\Kegiatan;
use App\Kontak;

class AdminPagesController extends Controller
{
  public function __construct()
  {
    $this->middleware('admin');
  }

  public function index()
  {
    $jlhberita = Berita::all()->count();
    $jlhkegiatan = Galeri::all()->count();
    $jlhfoto = Kegiatan::all()->count();
    $jlhpengaduan = Kontak::all()->count();
    return view('back.content.dashboard', compact('jlhberita', 'jlhkegiatan', 'jlhfoto', 'jlhpengaduan'));
  }
}
