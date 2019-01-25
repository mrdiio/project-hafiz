<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class AdminArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $artikel = Article::all();
      return view ("admin/artikel",compact('artikel'));
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
      $this->validate($request, [
        'isi' => 'required',
      ]);

      $artikel = new Article;
      if ($request->has('file')) {
      $f = $request->file('file');
      $filename = time().'.'.$f->getClientOriginalExtension();
      $f->storeAs('public',$filename);
      $artikel->file = $filename;
      }
      $artikel->judul = $request->judul;
      $artikel->slug = str_slug($request->judul);
      $artikel->isi = $request->isi;
      // dd($request->isi);

      $artikel->save();

      return redirect()->action('AdminArtikelController@index')->with('alert', 'Data berhasil ditambah!');
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
      $this->validate($request, [
        'isi' => 'required',
      ]);
      
      $artikel = Article::find($id);
      if ($request->has('file')) {
      $f = $request->file('file');
      $filename = time().'.'.$f->getClientOriginalExtension();
      $f->storeAs('public',$filename);
      $artikel->file = $filename;
      }
      $artikel->judul = $request->judul;
      $artikel->slug = str_slug($request->judul);
      $artikel->isi = $request->isi;

      $artikel->save();

      return redirect()->action('AdminArtikelController@index')->with('alert', 'Data berhasil dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $artikel= Article::find($id);
      \File::delete('storage/'.$artikel->file);
      $artikel->delete();
      return redirect()->action('AdminArtikelController@index')->with('alert', 'Data berhasil dihapus!');
    }
}
