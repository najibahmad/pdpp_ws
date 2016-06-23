@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row top20">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Membuat Nama Konsentrasi</div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/konsentrasi') }}">
                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('nama_konsentrasi') ? ' has-error' : '' }}">
                          <label for="nama_konsentrasi" class="col-md-4 control-label">Nama Konsentrasi</label>

                          <div class="col-md-6">
                              <input id="nama_konsentrasi" type="text" class="form-control" name="nama_konsentrasi" value="{{ old('nama_konsentrasi') }}">

                              @if ($errors->has('nama_konsentrasi'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('nama_konsentrasi') }}</strong>
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
