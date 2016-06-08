@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Membuat Pengasuh Baru</div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/pengasuh') }}">
                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('NIK') ? ' has-error' : '' }}">
                          <label for="NIK" class="col-md-4 control-label">Nomor KTP/NIK</label>

                          <div class="col-md-6">
                              <input id="NIK" type="text" class="form-control" name="NIK" value="{{ old('NIK') }}">

                              @if ($errors->has('NIK'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('NIK') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('nama_pengasuh') ? ' has-error' : '' }}">
                          <label for="nama_pengasuh" class="col-md-4 control-label">Nama Pengasuh</label>

                          <div class="col-md-6">
                              <input id="nama_pengasuh" type="text" class="form-control" name="nama_pengasuh" value="{{ old('nama_pengasuh') }}">

                              @if ($errors->has('nama_pengasuh'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('nama_pengasuh') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('jabatan') ? ' has-error' : '' }}">
                          <label for="jabatan" class="col-md-4 control-label">Jabatan Pengasuh</label>

                          <div class="col-md-6">
                              {!! Form::select('jabatan', [ '100' =>'--Pilih Jabatan--']+$jabatan, 100,['class' => 'form-control']) !!}

                              @if ($errors->has('jabatan'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('jabatan') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('hp_pengasuh') ? ' has-error' : '' }}">
                          <label for="hp_pengasuh" class="col-md-4 control-label">Telpon Pengasuh</label>

                          <div class="col-md-6">
                              <input id="hp_pengasuh" type="text" class="form-control" name="hp_pengasuh" value="{{ old('hp_pengasuh') }}">

                              @if ($errors->has('hp_pengasuh'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('hp_pengasuh') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('email_pengasuh') ? ' has-error' : '' }}">
                          <label for="email_pengasuh" class="col-md-4 control-label">Email Pengasuh</label>

                          <div class="col-md-6">
                              <input id="email_pengasuh" type="text" class="form-control" name="email_pengasuh" value="{{ old('email_pengasuh') }}">

                              @if ($errors->has('email_pengasuh'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email_pengasuh') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('facebook_pengasuh') ? ' has-error' : '' }}">
                          <label for="facebook_pengasuh" class="col-md-4 control-label">Facebook Pengasuh</label>

                          <div class="col-md-6">
                              <input id="facebook_pengasuh" type="text" class="form-control" name="facebook_pengasuh" value="{{ old('facebook_pengasuh') }}">

                              @if ($errors->has('facebook_pengasuh'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('facebook_pengasuh') }}</strong>
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
