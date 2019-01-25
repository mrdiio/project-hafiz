<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class AdminEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $event = Event::all();
        return view ("admin/event",compact('event'));
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
            'description' => 'required',
        ]);
        $event = new Event;
        $event->title = $request->title;
        $event->slug = str_slug($request->title);
        $event->location = $request->location;
        $event->date = date("Y/m/d", strtotime($request->date));
        $event->start_time = date("H:i:s", strtotime($request->start_time));
        $event->end_time = date("H:i:s", strtotime($request->end_time));
        $event->description = $request->description;
        $event->image = 'Image';
        $event->status = 'aktif';
        $event->save();
        // dd($event->date);

        if ($request->has('image')) {
            $gambar = $request->file('image');
            $filename = $event->id.'-'.$event->slug . '.' . $gambar->getClientOriginalExtension();
            $gambar->storeAs('public/events/', $filename);
            $event->image = $filename;
        }
        $event->save();

        return redirect()->action('AdminEventController@index')->with('alert', 'Data berhasil ditambah!');
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
        //
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
