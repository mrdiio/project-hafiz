@extends('admin.layouts.appAdmin')

@section('content')
<section class="content-header">
  <Br>
    <ol class="breadcrumb">
      <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Tentang</li>
    </ol>
</section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Tentang</h3><br>
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
                  <th>Judul</th>
                  <th>Isi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach($tentang as $data)
              <tr>
                <td>{{$data->judul}}</td>
                <td>{!!substr($data->isi, 0,80)!!}...</td>
                <td>
                  <a href="#" class="btn btn-warning" role="button" data-toggle="modal" data-target="#update{{$data->id}}"><i class="fa fa-edit"></i> Edit</a>
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
      <!-- Modal Update -->
      @foreach($tentang as $edit)
      <div class="modal fade" id="update{{$edit->id}}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Edit Data</h4>
                </div>
              <div class="box-body">
                <form role="form" method="POST" action="/tentang/{{$edit->id}}" enctype="multipart/form-data">
                {{method_field('PUT')}}
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                  <label>Judul</label>
                  <input type="text" class="form-control" id="judul" name="judul" value="{{$edit->judul}}" required>
                  @if ($errors->has('judul'))
                      <span class="help-block">
                          <strong>{{ $errors->first('judul') }}</strong>
                      </span>
                  @endif
              </div>
            <div class="form-group{{ $errors->has('isi') ? ' has-error' : '' }}">
              <label>Isi</label>
                <textarea class="form-control" id="editor2" name="isi" rows="10" cols="80" required>{!!$edit->isi!!}</textarea>
              @if ($errors->has('isi'))
                  <span class="help-block">
                      <strong>{{ $errors->first('isi') }}</strong>
                  </span>
              @endif
            </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
              </div>
            </div>
       </div>
       @endforeach

  </section>
  @endsection
