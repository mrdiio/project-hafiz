@extends('admin.layouts.appAdmin')

@section('content')
<section class="content-header">
  <Br>
    <ol class="breadcrumb">
      <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Panorama</li>
    </ol>
</section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">{{ $panorama->nama }}</h3><br>
            <span class="rating">
              <i class="ui huge star rating" data-max-rating="5" data-rating="{{ round($panorama->reviews->avg('rate')) }}">3456</i>
            </span>
            <span style="font-size:1.4rem">({{ $panorama->reviews->count() }})</span>
          </div>
          <!-- /.box-header -->
          @if (session('alert'))
            <div class="box-body" id="alert">
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                {{ session('alert') }}
              </div>
            </div>
            @endif
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Pesan</th>
                  <th>Rate</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach($review as $data)
              <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->message}}</td>
                <td>
                  <span class="rating">
                    <i class="ui huge star rating" data-max-rating="5" data-rating="{{ round($data->rate) }}">3456</i>
                  </span>
                </td>
                <td>
                  <a href="#" class="btn btn-danger" role="button"  data-toggle="modal" data-target="#delete{{$data->id}}"><i class="fa fa-trash"></i> Hapus</a>
                </td>
              </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>
    <!-- Modal Hapus -->
    @foreach($review as $hapus)
    <div class="modal fade" id="delete{{$hapus->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Hapus Data {{$hapus->name}}</h4>
            </div>
            <form role="form" method="POST" action="/review/{{$hapus->id}}">
              {{method_field('DELETE')}}
              {{ csrf_field() }}
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Delete</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    @endforeach

  </section>
  @endsection

@push('css')
  <link rel="stylesheet" href="{{ asset('css/semantic.css') }}" type="text/css">
@endpush

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.4/semantic.min.js"></script>
<script>
  $(function() {
    $('.ui.rating').rating('disable');
  });
</script>
@endpush
