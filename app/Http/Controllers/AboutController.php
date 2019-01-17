<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{

    public function index()
    {
      $tentang = About::all();

      return view ("about",compact('tentang'));
    }
}
