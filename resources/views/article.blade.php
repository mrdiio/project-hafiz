@extends('layouts.appFt')

@section('content')
<h1 class="header center blue-text">ARTIKEL</h1>
@foreach($artikel->chunk(3) as $artikels)
  <div class="row">
@foreach($artikels as $data)
    <div class="col l4">
      <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="{{asset('storage/'.$data->file)}}">
        </div>
        <div class="card-content">
          <span class="card-title grey-text text-darken-4">{{$data->judul}}</span>
          <p><a href="/artikel/{{$data->slug}}">Selengkapnya</a></p>
        </div>
      </div>
    </div>
@endforeach
  </div>
  @endforeach
@endsection
