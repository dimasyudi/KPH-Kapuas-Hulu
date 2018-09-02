<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Pegawai;

class PegawaiPagesController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      return view('pegawai.content.dashboard');
    }

    public function editProfil($id)
    {
      $user = User::find($id);
      $pegawai = Pegawai::where('nip', $user->nip)->first();
      return view('pegawai.content.editprofil', compact('user', 'pegawai'));
    }

    public function editProfilSubmit($id, Request $request)
    {
      $user = User::find($id);
      $pegawai = Pegawai::where('user_id', $id)->first();

      $pegawai->nama = $request->nama;
      $pegawai->ttl = $request->ttl;
      $pegawai->tmt_cpns = $request->tmt_cpns;
      $pegawai->tmt_pns = $request->tmt_pns;
      $pegawai->pangkat = $request->pangkat;
      $pegawai->golongan = $request->golongan;
      $pegawai->eselon = $request->eselon;
      $pegawai->jurusanpendidikan = $request->jurusanpendidikan;
      $pegawai->gajiberkala = $request->gajiberkala;
      $pegawai->update();

      return back();
    }

    public function editPasswordSubmit(Request $request, $id)
    {
      $user = User::find($id);
      $user->password = bcrypt($request->password);
      $user->update();
      return back();
    }
}
