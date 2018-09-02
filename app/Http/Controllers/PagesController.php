<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;
use App\Galeri;
use App\Berita;
use Auth;

class PagesController extends Controller
{
  public function index()
  {
    $beritaterbarus = Berita::latest()->take(3)->get();
    $kegiatanterbarus = Kegiatan::latest()->take(4)->get();
    return view('front.content.home', compact('beritaterbarus', 'kegiatanterbarus'));
  }

  public function profil()
  {
    return view('front.content.profil');
  }

  public function kegiatan()
  {
    $kegiatans = Kegiatan::latest()->paginate(9);
    return view('front.content.kegiatan', compact('kegiatans'));
  }

  public function kegiatanDetail($id)
  {
    $kegiatan = Kegiatan::find($id);
    return view('front.content.kegiatan-detail', compact('kegiatan'));
  }

  public function galeri()
  {
    $galeris = Galeri::latest()->get();
    return view('front.content.galeri', compact('galeris'));
  }

  public function berita()
  {
    $beritas = Berita::latest()->get();
    return view('front.content.berita', compact('beritas'));
  }

  public function beritaDetail($id)
  {
    $berita = Berita::find($id);
    return view('front.content.berita-detail', compact('berita'));
  }

  public function pilihanLogin()
  {
    if (Auth::user()->admin == 1 || Auth::user()->admin == 2) {
      return redirect()->route('admin.home');
    } else {
      return redirect()->route('pegawai.home');
    }
  }
}
