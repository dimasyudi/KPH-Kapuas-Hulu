<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use Auth;
use Image;

class AdminBeritaController extends Controller
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
      $beritas = Berita::latest()->get();
      return view('back.content.berita-index', compact('beritas'));
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
        Image::make($foto)->resize(1000,637)->save( public_path('/uploads/berita/'.$filename));

        Auth::user()->beritas()->create([
          'judul' => $request->judul,
          'isi' => $request->isi,
          'foto' => $filename
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
      $berita = Berita::find($id);
      return view('back.content.berita-detail', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $berita = Berita::find($id);
      return view('back.content.berita-edit', compact('berita'));
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
      $berita = Berita::find($id);

      if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
        $filename = time().'.'.$foto->getClientOriginalExtension();
        Image::make($foto)->resize(1000,637)->save( public_path('/uploads/berita/'.$filename));

        $berita->judul = $request->judul;
        $berita->isi= $request->isi;
        $berita->foto = $filename;
        $berita->update();
      } else {
        $berita->judul = $request->judul;
        $berita->isi= $request->isi;
        $berita->update();
      }

      return redirect()->route('kelola-berita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $berita = Berita::find($id);
      $berita->delete();
      return back();
    }
}
