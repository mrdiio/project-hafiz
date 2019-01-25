@extends('admin.layouts.appAdmin')

@section('content')
<section class="content-header">
  <Br>
    <ol class="breadcrumb">
      <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Event</li>
    </ol>
</section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Event</h3><br>
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

            {{-- @if ($errors->count() > 0)
              <div class="box-body" id="alerterror">
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                    Error update data!
                    @foreach ($errors->all as $item)
                      <li>{{$item}}</li>
                    @endforeach
                </div>
              </div>
            @endif --}}
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="col-xs-1">#</th>
                  <th>Judul</th>
                  <th>Lokasi</th>
                  <th>Tanggal</th>
                  <th>Waktu</th>
                  <th class="col-md-2">Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach($event as $data)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->title}}</td>
                <td>{{ $data->location }}</td>
                <td>{{ date("d F Y", strtotime($data->date)) }}</td>
                <td>{{ date("h:i A", strtotime($data->start_time)) }} - {{ date("h:i A", strtotime($data->end_time))}}</td>
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
              <form role="form" method="POST" action="/eventadmin" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                <label>Judul</label>
                <input type="text" class="form-control" placeholder="Ketik judul" name="title" autofocus>
              </div>

              <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                <label>Lokasi</label>
                <input type="text" class="form-control" placeholder="Ketik lokasi" name="location">
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Tanggal:</label>
                    <div class="input-group date">
                      <input type="text" class="form-control pull-right" id="datepicker" name="date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Mulai:</label>
                    <div class="input-group">
                      <input type="text" class="form-control timepicker" name="start_time">
                      <div class="input-group-addon">
                        <i class="fa fa-clock-o"></i>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label>Selesai:</label>
                    <div class="input-group">
                      <input type="text" class="form-control timepicker" name="end_time">
                      <div class="input-group-addon">
                        <i class="fa fa-clock-o"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                <label>Deskripsi</label>
                <textarea class="form-control" id="editor1" name="description" rows="10" cols="80"></textarea>
                @if ($errors->has('description'))
                  <span class="help-block">
                      <strong>{{ $errors->first('description') }}</strong>
                  </span>
                @endif
              </div>

              <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                <label>Gambar</label>
                <input type="file" class="form-control" name="image" >
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
    {{-- /.modal-tambah --}}

    <!-- Modal Edit -->
    @foreach ($event as $edit)
      <div class="modal fade" id="update{{$edit->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Edit Data</h4>
            </div>
              <div class="box-body">
                <form role="form" method="POST" action="/eventadmin/{{$edit->id}}" enctype="multipart/form-data">
                  @method('PUT')
                  @csrf
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                  <label>Judul</label>
                  <input type="text" class="form-control" placeholder="Ketik judul" name="title" value="{{$edit->title}}">
                </div>

                <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                  <label>Lokasi</label>
                  <input type="text" class="form-control" placeholder="Ketik lokasi" name="location" value="{{$edit->location}}">
                </div>

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Tanggal:</label>
                      <div class="input-group date">
                        <input type="text" class="form-control pull-right" id="edit-datepicker" name="date"
                            value="{{ date("m/d/Y", strtotime($edit->date))}}">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Mulai:</label>
                      <div class="input-group">
                        <input type="text" class="form-control edit-timepicker" name="start_time"
                            value="{{date("h:i A", strtotime($edit->start_time))}} ">
                        <div class="input-group-addon">
                          <i class="fa fa-clock-o"></i>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Selesai:</label>
                      <div class="input-group">
                        <input type="text" class="form-control edit-timepicker" name="end_time"
                            value="{{date("h:i A", strtotime($edit->end_time))}}">
                        <div class="input-group-addon">
                          <i class="fa fa-clock-o"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                  <label>Deskripsi</label>
                  <textarea class="form-control" id="editor1" name="description" rows="10" cols="80">
                    {!! $edit->description !!}
                  </textarea>
                  @if ($errors->has('description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                  <label>Gambar</label>
                  <input type="file" class="form-control" name="image" >
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
    @endforeach
    {{-- /.modal-edit --}}

    {{-- Modal Hapus --}}
    @foreach($event as $hapus)
      <div class="modal fade" id="delete{{$hapus->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Hapus <b>{{$hapus->title}}</b></h4>
            </div>
            <form role="form" method="POST" action="/eventadmin/{{$hapus->id}}">
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
    {{-- /.modal-hapus --}}


  </section>
@endsection

@push('css')
  {{-- Date Time Picker --}}
  <link rel="stylesheet" href="{{ asset('admin/bootstrap/css/bootstrap-timepicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/bootstrap/css/bootstrap-datepicker.min.css') }}">
@endpush

@push('js')
  <!-- bootstrap date time picker -->
  <script src=" {{ asset('admin/bootstrap/js/bootstrap-timepicker.min.js') }}"></script>
  <script src=" {{ asset('admin/bootstrap/js/bootstrap-datepicker.min.js') }}"></script>

  <script>
    $(function() {
      //Timepicker
      $('.timepicker').timepicker({
        showInputs: false
      })
      $('.edit-timepicker').timepicker({
        showInputs: false,
        defaultTime: ''
      })

      //Date picker
      $('#datepicker, #edit-datepicker').datepicker({
        autoclose: true
      })
    })
  </script>

@endpush
