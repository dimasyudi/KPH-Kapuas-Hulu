<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataPendidikan;
use Auth;
use App\Pegawai;

class PegawaiPendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
      $this->middleware('auth');
    }
    
    public function index()
    {
      $pegawai = Pegawai::where('nip', Auth::user()->nip)->first();
      $pendidikan = DataPendidikan::where('nip', $pegawai->nip)->first();
      return view('pegawai.content.pendidikan-index', compact('pegawai', 'pendidikan'));
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
        //
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
      $pendidikan = DataPendidikan::find($id);
      $pendidikan->nip = $request->nip;
      $pendidikan->pendidikan_formal = $request->pendidikan_formal;
      $pendidikan->tahun = $request->tahun;
      $pendidikan->no_ijazah = $request->no_ijazah;
      $pendidikan->institusi = $request->institusi;
      $pendidikan->lokasi = $request->lokasi;
      $pendidikan->update();
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
        //
    }
}
