<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Panorama;
use App\Review;

class WelcomeController extends Controller
{

    public function index()
    {
      $panorama = Panorama::all();

      return view ("welcome",compact('panorama'));
    }

    public function show($slug)
    {
      $panorama = Panorama::where('slug', $slug)->first();
      $review = Review::where([['panorama_id', '=', $panorama->id], ['status', '=', 1]])->orderBy('id', 'desc')->get();

      $lain = Panorama::orderBy('id','desc')->take('4')->get();

      return view ("panorama",compact('panorama','lain', 'review'));
    }

    public function update(Request $request, $id)
    {
        //
        $panorama = panorama::find($id);
        $r = Review::where([['panorama_id', $id],['email',$request->email]])->get();
        // dd($r->count());

        if($r->count() > 0){
          return redirect()->back()->with('exists', 'Sukses');
        } else {
          $review = new Review;
          $review->name = $request->name;
          $review->email = $request->email;
          $review->message = $request->message;
          $review->rate = $request->rate;
          $review->panorama_id = $panorama->id;
          $review->status = 1;
          $review->save();

          // return redirect()->action('WebPark@show', ['id' => $park->link]);
          return redirect()->back()->with('pesan', 'Sukses');
        }

    }

}
