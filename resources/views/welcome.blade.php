@extends('layouts.appFt')

@section('content')
<div class="body-container container-fluid">
    <div class="row justify-content-center">

        <!-- <div class="col-lg-12 col-md-9 col-12 body_block  align-content-center"> -->
        <div class="col l12 m9 s12 body_block  align-content-center" style="padding:0">

            <div class="portfolio">
                <div class="container-fluid">
                    <!--=================== masaonry portfolio start====================-->
                    <div class="grid img-container justify-content-center no-gutters">
                        <!-- <div class="grid-sizer col-sm-12 col-md-6 col-lg-3"></div> -->
                        <div class="grid-sizer col s12 m6 l3"></div>
                        @foreach($panorama as $data)
                        <!-- <div class="grid-item  branding architecture col-sm-12 col-md-6"> -->
                        <div class="grid-item  branding architecture col s12 m6" style="padding:0">
                          <a href="/panorama/{{$data->slug}}" title="{{$data->nama}}">
                            <div class="project_box_one">

                              <img src="{{asset('storage/'.$data->thumbnail)}}" alt="{{$data->nama}}" />
                              <div class="product_info">
                                  <div class="product_info_text">
                                      <div class="product_info_text_inner">
                                          <i class="ion ion-plus"></i>
                                          <h4>{{$data->nama}}</h4>
                                      </div>
                                  </div>
                              </div>
                            </div>
                          </a>
                        </div>
                        @endforeach
                    </div>
                    <!--=================== masaonry portfolio end====================-->
                </div>
            </div>

        </div>
        <!--=================== content body end ====================-->
    </div>
</div>
@endsection
