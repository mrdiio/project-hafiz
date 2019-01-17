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
            <h3 class="box-title">Panorama</h3><br>
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
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Deskripsi</th>
                  <th>Rate</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach($panorama as $data)
              <tr>
                <td>{{$data->nama}}</td>
                <td>{!!substr($data->deskripsi, 0,80)!!}...</td>
                <td>
                  <button class="badge" onclick="location.href='/review/{{ $data->slug }}'">
                    <span class="rating">
                      <i class="ui huge star rating" data-max-rating="5" data-rating="{{ round($data->reviews->avg('rate')) }}">3456</i>
                    </span>
                  </button>
                  <span style="font-size:1.4rem">({{ $data->reviews->count() }})</span>
                </td>
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
              <form role="form" method="POST" action="/panoramaadmin" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                <label>Nama</label>
                <input type="text" class="form-control" placeholder="Ketik nama" name="nama" required autofocus>
                @if ($errors->has('nama'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nama') }}</strong>
                    </span>
                @endif
              </div>
            <div class="form-group{{ $errors->has('thumbnail') ? ' has-error' : '' }}">
              <label>Thumbnail</label>
              <input type="file" class="form-control" name="thumbnail" required>
              @if ($errors->has('thumbnail'))
                  <span class="help-block">
                      <strong>{{ $errors->first('thumbnail') }}</strong>
                  </span>
              @endif
            </div>
          <div class="form-group{{ $errors->has('deskripsi') ? ' has-error' : '' }}">
            <label>Deskripsi</label>
              <textarea class="form-control" name="deskripsi" rows="10" cols="80" required></textarea>
            @if ($errors->has('deskripsi'))
                <span class="help-block">
                    <strong>{{ $errors->first('deskripsi') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('panorama') ? ' has-error' : '' }}">
            <label>Panorama</label>
            <input type="file" class="form-control" name="panorama">
            @if ($errors->has('panorama'))
                <span class="help-block">
                    <strong>{{ $errors->first('panorama') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('maps') ? ' has-error' : '' }}">
            <label>Maps</label>
              <textarea class="form-control" name="maps" rows="3" cols="80" required></textarea>
            @if ($errors->has('maps'))
                <span class="help-block">
                    <strong>{{ $errors->first('maps') }}</strong>
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

      <!-- Modal Update -->
      @foreach($panorama as $edit)
      <div class="modal fade" id="update{{$edit->id}}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Edit Data</h4>
                </div>
              <div class="box-body">
                <form role="form" method="POST" action="/panoramaadmin/{{$edit->id}}" enctype="multipart/form-data">
                {{method_field('PUT')}}
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                  <label>Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="{{$edit->nama}}" required>
                  @if ($errors->has('nama'))
                      <span class="help-block">
                          <strong>{{ $errors->first('nama') }}</strong>
                      </span>
                  @endif
              </div>
              <div class="form-group{{ $errors->has('thumbnail') ? ' has-error' : '' }}">
                <label>Thumbnail</label>
                <input type="file" class="form-control" id="gambar" name="thumbnail">
                @if ($errors->has('thumbnail'))
                    <span class="help-block">
                        <strong>{{ $errors->first('thumbnail') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('deskripsi') ? ' has-error' : '' }}">
              <label>Deskripsi</label>
                <textarea class="form-control" id="editor2" name="deskripsi" rows="10" cols="80" required>{!!$edit->deskripsi!!}</textarea>
              @if ($errors->has('deskripsi'))
                  <span class="help-block">
                      <strong>{{ $errors->first('deskripsi') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group{{ $errors->has('panorama') ? ' has-error' : '' }}">
              <label>Panorama</label>
              <input type="file" class="form-control" id="panorama" name="panorama">
              @if ($errors->has('panorama'))
                  <span class="help-block">
                      <strong>{{ $errors->first('panorama') }}</strong>
                  </span>
              @endif
          </div>
          <div class="form-group{{ $errors->has('maps') ? ' has-error' : '' }}">
            <label>Maps</label>
              <textarea class="form-control" id="maps" name="maps" rows="3" cols="80" required>{!!$edit->maps!!}</textarea>
            @if ($errors->has('maps'))
                <span class="help-block">
                    <strong>{{ $errors->first('maps') }}</strong>
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
          <!-- Modal Hapus -->
          @foreach($panorama as $hapus)
          <div class="modal fade" id="delete{{$hapus->id}}">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Hapus Data {{$hapus->nama}}</h4>
                  </div>
                  <form role="form" method="POST" action="/panoramaadmin/{{$hapus->id}}">
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
