@extends('layouts.appFt')

@section('content')
<div class="row">
  <div class="col l12">
    <div class="section no-pad-bot" id="index-banner">
        @foreach($tentang as $data)
        <br><br>
        <h1 class="header center blue-text">{{$data->judul}}</h1>
        <Br>
          {!!$data->isi!!}
          <Br><br><Br><br><Br>
        @endforeach
    </div>
  </div>
</div>


<!-- <div class="container">

  <br><br><br><br><br><br><br><br>
</div> -->
@endsection
