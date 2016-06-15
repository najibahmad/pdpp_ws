@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row top20">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Pencarian Data Pesantren</div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/provinsi') }}">
                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('nama_provinsi') ? ' has-error' : '' }}">
                          <label for="nama_provinsi" class="col-md-4 control-label">Nama Provinsi</label>

                          <div class="col-md-6">
                              <input id="nama_provinsi" type="text" class="form-control" name="nama_provinsi" value="{{ old('nama_provinsi') }}">

                              @if ($errors->has('nama_provinsi'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('nama_provinsi') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="" class="col-md-4 control-label"></label>
                      </div>
                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-primary">
                                  <i class="fa fa-btn fa-user"></i> Simpan
                              </button>
                          </div>
                      </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
