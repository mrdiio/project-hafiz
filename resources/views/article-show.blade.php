@extends('layouts.appFt')

@section('content')
<div class="row">
  <h1 class="header center blue-text">{{$artikel->judul}}</h1>

  <div class="col l10 offset-l1">
    <div class="card">
      <div class="card-image">
        <img src="{{asset('storage/'.$artikel->file)}}">
      </div>
      <div class="card-content">
        <p>{!!$artikel->isi!!}</p>
      </div>
    </div>

    <div id="disqus_thread"></div>
  </div>
    <script>

    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://hafiz-virtualtour-ml.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


  <!-- tambah discuss di bawah sini -->
</div>


<!-- <div class="container">

  <br><br><br><br><br><br><br><br>
</div> -->
@endsection
