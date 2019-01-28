@extends('layouts.appFt')

@section('content')
<h1 class="header center blue-text">EVENT</h1>

  <div class="row hide-on-med-and-down">
    @foreach ($event as $data)
      <div class="col l10 offset-l1">
        <div class="card horizontal">
          <div class="card-image" style="width: 300px">
            <img class="responsive-img" src="{{asset('storage/events/'.$data->image)}}">
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <div class="row">
                <div class="col l7">
                  <p class="black-text" style="font-size: 20px;font-weight:600">{{ $data->title }} <small>( {{$data->location}} )</small></p>
                  <p class="black-text">< {{ date("h:i A", strtotime($data->start_time)) }} - {{ date("h:i A", strtotime($data->end_time)) }} ></p>
                </div>
                <div class="col l3 offset-l2">
                  <div class="valign-wrapper black-text right">
                    <div class="center-align">
                      <b style="font-size: 40px; font-weight: 700">{{ date("d", strtotime($data->date)) }}</b> <br> 
                      {{ date("F 'y", strtotime($data->date)) }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-action right light-blue lighten-1">
              <a class="right white-text" href="/event/{{ $data->slug }}">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <div class="row hide-on-large-only">
    @foreach ($event as $data)
      <div class="col s12">
        <div class="card">
          <div class="card-image">
              <img class="responsive-img" src="{{asset('storage/events/'.$data->image)}}">
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <p class="black-text center-align" style="font-size: 20px;font-weight:600">{{ $data->title }}</p>
              <p class="black-text center-align">< {{ date("h:i A", strtotime($data->start_time)) }} - {{ date("h:i A", strtotime($data->end_time)) }} ></p>
              <p class="black-text center-align">{{ date("d F Y", strtotime($data->date)) }}</p>
            </div>
            <div class="card-action light-blue lighten-1">
              <a class="white-text" href="/event/{{$data->slug}}">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
{{-- 
@foreach($event->chunk(3) as $events)
  <div class="row">
    @foreach($events as $data)
      <div class="col l4">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{{asset('storage/events/'.$data->image)}}">
          </div>
          <div class="card-content">
            <span class="card-title grey-text text-darken-4">{{$data->title}}</span>
            <p><a href="/artikel/{{$data->slug}}">Selengkapnya</a></p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endforeach --}}

@endsection
