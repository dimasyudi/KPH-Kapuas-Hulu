<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\User;

class AdminPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
      $this->middleware('admin');
    }

    public function index()
    {
      $pegawais = Pegawai::latest()->get();
      return view('back.content.pegawai-index', compact('pegawais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $pegawai = new Pegawai;
      $pegawai->nip = $request->nip;
      $pegawai->nama = $request->nama;
      $pegawai->ttl = $request->ttl;
      $pegawai->alamat = $request->alamat;
      $pegawai->jenis_kelamin = $request->jenis_kelamin;
      $pegawai->no_telp = $request->no_telp;
      $pegawai->agama = $request->agama;
      $pegawai->save();

      return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $pegawai = Pegawai::find($id);
      $pegawai->nip = $request->nip;
      $pegawai->nama = $request->nama;
      $pegawai->ttl = $request->ttl;
      $pegawai->alamat = $request->alamat;
      $pegawai->jenis_kelamin = $request->jenis_kelamin;
      $pegawai->no_telp = $request->no_telp;
      $pegawai->agama = $request->agama;
      $pegawai->update();

      return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        
        return back();
    }
}
