<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan;
use Auth;
use Image;

class AdminKegiatanController extends Controller
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
      $kegiatans = Kegiatan::latest()->get();
      return view('back.content.kegiatan-index', compact('kegiatans'));
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
        $foto = $request->file('foto');
        $filename = time().'.'.$foto->getClientOriginalExtension();
        Image::make($foto)->resize(1000,673)->save( public_path('/uploads/kegiatan/'.$filename));

        Auth::user()->kegiatans()->create([
          'nama' => $request->nama,
          'deskripsi' => $request->deskripsi,
          'alamat' => $request->alamat,
          'foto' => $filename,
          'tglmulai' => $request->tglmulai,
          'tglselesai' => $request->tglselesai,
        ]);

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
      $kegiatan = Kegiatan::find($id);
      return view('back.content.kegiatan-detail', compact('kegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('back.content.kegiatan-edit', compact('kegiatan'));
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
      $kegiatan = Kegiatan::find($id);

      if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
        $filename = time().'.'.$foto->getClientOriginalExtension();
        Image::make($foto)->resize(1000,673)->save( public_path('/uploads/kegiatan/'.$filename));

        $kegiatan->nama = $request->nama;
        $kegiatan->deskripsi = $request->deskripsi;
        $kegiatan->alamat = $request->alamat;
        $kegiatan->foto = $filename;
        $kegiatan->tglmulai = $request->tglmulai;
        $kegiatan->tglselesai = $request->tglselesai;
        $kegiatan->update();
      } else {
        $kegiatan->nama = $request->nama;
        $kegiatan->deskripsi = $request->deskripsi;
        $kegiatan->alamat = $request->alamat;
        $kegiatan->tglmulai = $request->tglmulai;
        $kegiatan->tglselesai = $request->tglselesai;
        $kegiatan->update();
      }

      return redirect()->route('kelola-kegiatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kegiatan = Kegiatan::find($id);
        $kegiatan->delete();

        return back();
    }
}
