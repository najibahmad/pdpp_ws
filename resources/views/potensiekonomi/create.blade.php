@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row top20">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Membuat Nama Potensi Ekonomi</div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/potensiekonomi') }}">
                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('nama_potensi_ekonomi') ? ' has-error' : '' }}">
                          <label for="nama_potensi_ekonomi" class="col-md-4 control-label">Nama Potensi Ekonomi</label>

                          <div class="col-md-6">
                              <input id="nama_potensi_ekonomi" type="text" class="form-control" name="nama_potensi_ekonomi" value="{{ old('nama_potensi_ekonomi') }}">

                              @if ($errors->has('nama_potensi_ekonomi'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('nama_potensi_ekonomi') }}</strong>
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
