<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panorama extends Model
{
  public function reviews()
  {
      // return $this->hasMany('App\Review');
      return $this->hasMany('App\Review')->where('status', '=', 1);
  }
}
