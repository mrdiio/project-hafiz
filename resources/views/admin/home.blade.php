

@extends('admin.layouts.appAdmin')

@section('content')
<section class="content-header">
    <h1>Welcome, <small>  {{ Auth::user()->name }}</small></h1>
    <ol class="breadcrumb">
      <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="ion ion-clipboard"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Total Data Wisata</span>
            <span class="info-box-number">{{$panorama}}</span>
          </div>
        </div>
    </div>

  </div>
  </section>
  @endsection
