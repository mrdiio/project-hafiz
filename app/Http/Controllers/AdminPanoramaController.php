<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Panorama;

class AdminPanoramaController extends Controller
{

    public function index()
    {
      $panorama= Panorama::all();
      return view ("admin/panorama",compact('panorama'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
      $panorama = new Panorama;

      if ($request->has('thumbnail')) {
      $t = $request->file('thumbnail');
      $filename = time().'1'.'.'.$t->getClientOriginalExtension();
      $t->storeAs('public',$filename);
      $panorama->thumbnail = $filename;
      }

      $panorama->nama = $request->nama;
      $panorama->slug = str_slug($request->nama);
      $panorama->deskripsi = $request->deskripsi;
        if ($request->has('panorama')) {
        $p = $request->file('panorama');
        $filename = time().'2'.'.'.$p->getClientOriginalExtension();
        $p->storeAs('public',$filename);
        $panorama->panorama = $filename;
        }
      $panorama->maps = $request->maps;

      $panorama->save();

      return redirect()->action('AdminPanoramaController@index')->with('alert', 'Data berhasil ditambah!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
      $panorama= Panorama::find($id);

      if ($request->has('thumbnail')) {
      $t = $request->file('thumbnail');
      $filename = time().'1'.'.'.$t->getClientOriginalExtension();
      $t->storeAs('public',$filename);
      $panorama->thumbnail = $filename;
      }

      $panorama->nama = $request->nama;
      $panorama->slug = str_slug($request->nama);
      $panorama->deskripsi = $request->deskripsi;
        if ($request->has('panorama')) {
        $p = $request->file('panorama');
        $filename = time().'2'.'.'.$p->getClientOriginalExtension();
        $p->storeAs('public',$filename);
        $panorama->panorama = $filename;
        }
      $panorama->maps = $request->maps;

      $panorama->save();

      return redirect()->action('AdminPanoramaController@index')->with('alert', 'Data berhasil dirubah!');
    }

    public function destroy($id)
    {
      $panorama= Panorama::find($id);
      \File::delete('storage/'.$panorama->thumbnail);
      $panorama->delete();
      return redirect()->action('AdminPanoramaController@index')->with('alert', 'Data berhasil dihapus!');
    }
}
