<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataGolongan;
use App\Pegawai;
use Auth;

class PegawaiGolonganController extends Controller
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
      $golongan = DataGolongan::where('nip', $pegawai->nip)->first();
      return view('pegawai.content.golongan-index', compact('pegawai', 'golongan'));
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
      $golongan = DataGolongan::find($id);
      $golongan->nip = $request->nip;
      $golongan->tmt_cpns = $request->tmt_cpns;
      $golongan->tmt_pns = $request->tmt_pns;
      $golongan->pangkat = $request->pangkat;
      $golongan->golongan = $request->golongan;
      $golongan->eselon = $request->eselon;
      $golongan->gajiberkala = $request->gajiberkala;
      $golongan->update();
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
