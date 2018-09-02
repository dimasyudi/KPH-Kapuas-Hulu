<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataKeluarga;
use App\Pegawai;

class AdminKeluargaController extends Controller
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
        $keluargas = DataKeluarga::latest()->get();
        $pegawais = Pegawai::all();
        return view('back.content.keluarga-index', compact('keluargas', 'pegawais'));
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
        $keluarga = new DataKeluarga;
        $keluarga->nip = $request->nip;
        $keluarga->nama = $request->nama;
        $keluarga->status_keluarga = $request->status_keluarga;
        $keluarga->ttl = $request->ttl;
        $keluarga->jenis_kelamin = $request->jenis_kelamin;
        $keluarga->agama = $request->agama;
        $keluarga->alamat = $request->alamat;
        $keluarga->pekerjaan = $request->pekerjaan;
        $keluarga->save();
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
      $keluarga = DataKeluarga::find($id);
      $keluarga->nip = $request->nip;
      $keluarga->nama = $request->nama;
      $keluarga->status_keluarga = $request->status_keluarga;
      $keluarga->ttl = $request->ttl;
      $keluarga->jenis_kelamin = $request->jenis_kelamin;
      $keluarga->agama = $request->agama;
      $keluarga->alamat = $request->alamat;
      $keluarga->pekerjaan = $request->pekerjaan;
      $keluarga->update();
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
        $keluarga = DataKeluarga::find($id);
        $keluarga->delete();
        return back();
    }
}
