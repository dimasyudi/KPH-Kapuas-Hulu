<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataPendidikan;
use App\Pegawai;

class AdminDataPendidikanController extends Controller
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
        $pendidikans = DataPendidikan::latest()->get();
        $pegawais = Pegawai::all();
        return view('back.content.pendidikan-index', compact('pendidikans', 'pegawais'));
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
        $pendidikan = new DataPendidikan;
        $pendidikan->nip = $request->nip;
        $pendidikan->pendidikan_formal = $request->pendidikan_formal;
        $pendidikan->tahun = $request->tahun;
        $pendidikan->no_ijazah = $request->no_ijazah;
        $pendidikan->institusi = $request->institusi;
        $pendidikan->lokasi = $request->lokasi;
        $pendidikan->save();
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
      $pendidikan = DataPendidikan::find($id);
      $pendidikan->delete();
      return back();
    }
}
