<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\DataGolongan;

class AdminDataGolonganController extends Controller
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
        $pegawais = Pegawai::all();
        $golongans = DataGolongan::latest()->get();
        return view('back.content.golongan-index', compact('pegawais', 'golongans'));
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
        $golongan = new DataGolongan;
        $golongan->nip = $request->nip;
        $golongan->tmt_cpns = $request->tmt_cpns;
        $golongan->tmt_pns = $request->tmt_pns;
        $golongan->pangkat = $request->pangkat;
        $golongan->golongan = $request->golongan;
        $golongan->eselon = $request->eselon;
        $golongan->gajiberkala = $request->gajiberkala;
        $golongan->save();
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
        $golongan = DataGolongan::find($id);
        $golongan->delete();
        return back();
    }
}
