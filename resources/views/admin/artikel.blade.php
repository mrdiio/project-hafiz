@extends('admin.layouts.appAdmin')

@section('content')
<section class="content-header">
  <Br>
    <ol class="breadcrumb">
      <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Artikel</li>
    </ol>
</section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Artikel</h3><br>
            <a class="btn btn-primary" role="button" data-toggle="modal" data-target="#modal-default" ><i class="fa fa-plus"></i> Tambah Data</a>
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

            @if ($errors->count() > 0)
              <div class="box-body" id="alerterror">
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                   Error update data!
                </div>
              </div>
             @endif
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Judul</th>
                  <th>Isi</th>
                  <th class="col-md-2">Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach($artikel as $data)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->judul}}</td>
                <td>{!!substr($data->isi, 0,80)!!}...</td>
                <td>
                  <a href="#" class="btn btn-warning" role="button" data-toggle="modal" data-target="#update{{$data->id}}"><i class="fa fa-edit"></i> Edit</a>
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

    <!-- Modal Tambah -->
    <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Data</h4>
          </div>
            <div class="box-body">
              <form role="form" method="POST" action="/artikeladmin" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                <label>Judul</label>
                <input type="text" class="form-control" placeholder="Ketik judul" name="judul" required autofocus>
              </div>
              <div class="form-group {{ $errors->has('isi') ? ' has-error' : '' }}">
                <label>Isi</label>
                <textarea class="form-control" id="editor1" name="isi" rows="10" cols="80" required></textarea>
                @if ($errors->has('isi'))
                  <span class="help-block">
                      <strong>{{ $errors->first('isi') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                <label>Gambar</label>
                <input type="file" class="form-control" name="file" required>
              </div>
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" id="simpan" class="btn btn-primary">Simpan</button>
              </div>
              </form>
            </div>
        </div>
    </div>

    <!-- Modal Update -->
    @foreach($artikel as $edit)
    <div class="modal fade" id="update{{$edit->id}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Data</h4>
              </div>
            <div class="box-body">
              <form role="form" method="POST" action="/artikeladmin/{{$edit->id}}" enctype="multipart/form-data">
              {{method_field('PUT')}}
              {{ csrf_field() }}
              <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                <label>Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{$edit->judul}}" required>
            </div>
            <div class="form-group{{ $errors->has('isi') ? ' has-error' : '' }}">
              <label>Isi</label>
                <textarea class="form-control" id="editor2" name="isi" rows="10" cols="80">{!!$edit->isi!!}</textarea>
                @if ($errors->has('isi'))
                  <span class="help-block">
                      <strong>{{ $errors->first('isi') }}</strong>
                  </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
              <label>Gambar</label>
              <input type="file" class="form-control" id="file" name="file">
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

    <!-- Modal Hapus -->
    @foreach($artikel as $hapus)
    <div class="modal fade" id="delete{{$hapus->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Hapus Data {{$hapus->judul}}</h4>
            </div>
            <form role="form" method="POST" action="/artikeladmin/{{$hapus->id}}">
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
