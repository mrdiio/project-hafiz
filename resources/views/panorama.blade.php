<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="description" content="Pariwisata -Pontianak">
    <meta name="keywords" content="Pariwisata , Pontianak">
    <meta name="author" content="M Hafiz Waliyuddin">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title>Panorama Wisata Pontianak</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.css') }}"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/grid.css') }}"  media="screen,projection"/>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}"> -->
    <!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"> -->
    <!-- <link href="{{ asset('css/gallery.css') }}" rel="stylesheet" >
    <script src="{{ asset('js/gallery.js') }}"></script> -->
    <script src="{{ asset('js/three.min.js') }}"></script>
    <script src="{{ asset('js/photo-sphere-viewer.min.js') }}"></script>
    <script src="//platform-api.sharethis.com/js/sharethis.js#property=5b4a9a1a77b646001224122f&product=sticky-share-buttons"></script>
    <script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'id', includedLanguages: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
      }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <link rel="stylesheet" href="{{ asset('css/semantic.css') }}" type="text/css">

    <style>
      html, body {
        margin: 0;
        width: 100%;
        height: 100%;
      }

      #container {
        width: 100%;
        height: 100%;
      }
    </style>
</head>

<body>
  <!-- <div class="maps">
    <div style="padding:3px;height:400px; background: white" class="pull-right">
        <iframe src="{{$panorama->maps}}" height="50%" width="100%" style="border:0"></iframe>
    </div>
  </div> -->
  @include('layouts/partials/navbar')

<div id="container">
</div>


<div class="fixed-action-btn">
  <a class="btn-floating btn-large amber">
    <i class="large material-icons">menu</i>
  </a>
  <ul>
    <li><a class="btn-floating red" href="#galeri"><i class="material-icons">panorama</i></a></li>
    <li><a class="btn-floating green modal-trigger" href="#modal1"><i class="material-icons">description</i></a></li>
    <li><a class="btn-floating blue modal-trigger" href="#modal2"><i class="material-icons">help</i></a></li>
  </ul>
</div>

<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <iframe src="{{$panorama->maps}}" height="150px" width="100%" style="border:0"></iframe>
    <h4 class="center">{{$panorama->nama}}</h4>
    <p>{!! $panorama->deskripsi !!}</p>
  </div>
</div>

<!-- Modal Structure -->
<div id="modal2" class="modal">
  <div class="modal-content">
      <img class="img-responsive" width="90%" height="90%px" src="{{asset('keterangan.png')}}">
  </div>
</div>

<div class="row">
  <div class="center">
    <h3 class="header blue-text">
      <div class="ui massive star rating" data-max-rating="5" data-rating="{{ round($panorama->reviews->avg('rate')) }}"></div>
      <br>
      {{ $panorama->reviews->count() }} Tanggapan
      <br>
      <a href="#modal3" class="waves-effect waves-light btn-small modal-trigger"><i class="material-icons left">add</i>Tambah Tanggapan</a>
    </h3>

    <!-- Modal Structure -->
    <div id="modal3" class="modal">
      <form method="post" action="/panorama/{{ $panorama->id }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="modal-content">
          <h4>Tambah Tanggapan</h4>
          <div class="row">
            <div class="col s12">
              <div class="row">
                <div class="input-field col s6">
                  <input id="name" name="name" type="text" class="validate">
                  <label for="name">Nama</label>
                </div>
                <div class="input-field col s6">
                  <input id="email" name="email" type="email" class="validate">
                  <label for="email">Email</label>
                </div>
                <div class="col s1">
                  <div class="form-group">
                    <i class="ui massive star rating" id="rates" data-max-rating="5">3456</i>
                    <input name="rate" id="rate" placeholder="rate" class="form-control" hidden>
                  </div>
                </div>
                <div class="input-field col s12">
                  <textarea id="message" name="message" class="materialize-textarea"></textarea>
                  <label for="message">Tanggapan</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <!-- <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a> -->
          <input type="submit" value="Tambah" class="waves-effect waves-green btn-flat">
        </div>
      </form>
    </div>
  </div>

  @foreach($review as $r)
  <div class="col l8 offset-l2">
    <div class="card">
      <div class="card-content">
        <span class="card-title grey-text text-darken-4">
          <p class="right">
            -
            @if( date('Y-m-d', strtotime($r->created_at)) == date('Y-m-d'))
            {{ date('h:i A', strtotime($r->created_at)) }}
            @else
            {{ date('d F Y', strtotime($r->created_at)) }}
            @endif
            -
          </p>
          {{ $r->name }} <br>
          <div class="ui large star rating" data-max-rating="5" data-rating="{{ $r->rate }}">3456</div>
        </span>
        <p>{{ $r->message }}</p>
      </div>
    </div>
  </div>
  @endforeach
</div>

<div class="containe" id="galeri">
  <div class="row">
    <div class="col-sm">
      <h4 class="center"><br><Br><Br><br>Tempat Wisata Lainnya</h4>
    </div>
  </div>
</div>

<ul id="rig">
  @foreach($lain as $data)
    <li>
        <a class="rig-cell" href="/panorama/{{$data->slug}}">
            <img class="img-responsive" width="100%" height="250px" src="{{asset('storage/'.$data->thumbnail)}}" alt="">
            <span class="rig-overlay"></span>
            <span class="rig-text">{{$data->nama}}</span>
        </a>
    </li>
    @endforeach
</ul>

@include('layouts/partials/footer')

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <script>
      $(document).ready(function(){
        $(".dropdown-trigger").dropdown();
      });

      $(document).ready(function(){
        $('.modal').modal();
      });

      document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.fixed-action-btn');
        var instances = M.FloatingActionButton.init(elems, {
          direction: 'bottom'
        });
      });
    </script>

    <script>
      var div = document.getElementById('container');
      var PSV = new PhotoSphereViewer({
          panorama: '{{asset('storage/'.$panorama->panorama)}}',
          container: div,
          time_anim: 5000,
          navbar: true,
          navbar_style: {
            backgroundColor: 'rgba(58, 67, 77, 0.7)'
          },
          size: {
            width: '100%',
            height: '90%'
          },
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.4/semantic.min.js"></script>
    <script type="text/javascript">
    $(function() {
      $('.ui.rating').rating('disable');
      $('#rates').rating({
        initialRating: 1,
        // clearable: true,
        onRate: function(value) {
          $('#rate').val(value);
        }
      });
      // $('#rates').rating('disable');
    })
    </script>

    <script type="text/javascript">
	    function googleTranslateElementInit() {
	      new google.translate.TranslateElement({pageLanguage: 'id', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
	    }

  		function triggerHtmlEvent(element, eventName) {
  		  var event;
  		  if (document.createEvent) {
  			event = document.createEvent('HTMLEvents');
  			event.initEvent(eventName, true, true);
  			element.dispatchEvent(event);
  		  } else {
  			event = document.createEventObject();
  			event.eventType = eventName;
  			element.fireEvent('on' + event.eventType, event);
  		  }
  		}

  		jQuery('.lang-select').click(function() {
  		  var theLang = jQuery(this).attr('data-lang');
  		  jQuery('.goog-te-combo').val(theLang);

  		  //alert(jQuery(this).attr('href'));
  		  window.location = jQuery(this).attr('href');
  		  location.reload();

  		});
	  </script>
    <script src="{{ asset('js/materialize.js') }}"></script>
    <script src="{{ asset('js/init.js') }}"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
  </body>
</html>
