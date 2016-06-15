@extends('admin.layout')

@section('css')
  <link href="{{ asset('css/selectize.css') }}" rel="stylesheet">
  <link href="{{ asset('css/selectize.bootstrap3.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row top20">
        <div class="col-md-10 col-sm-10 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Membuat Pesantren Baru</div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/pesantren') }}">
                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('NSPP') ? ' has-error' : '' }}">
                          <label for="NSPP" class="col-md-4 control-label">NSPP Pondok</label>

                          <div class="col-md-6">
                              <input id="NSPP" type="text" class="form-control" name="NSPP" value="{{ old('NSPP') }}">

                              @if ($errors->has('NSPP'))
                                  <span class="help-block">
                                      {{ $errors->first('NSPP') }}
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('nama_pesantren') ? ' has-error' : '' }}">
                          <label for="nama_pesantren" class="col-md-4 control-label">Nama Pesantren</label>

                          <div class="col-md-6">
                              <input id="nama_pesantren" type="text" class="form-control" name="nama_pesantren" value="{{ old('nama_pesantren') }}">

                              @if ($errors->has('nama_pesantren'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('nama_pesantren') }}</strong>
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
                      <div class="form-group{{ $errors->has('jumlah_santri') ? ' has-error' : '' }}">
                          <label for="jumlah_santri" class="col-md-4 control-label">Jumlah Santri</label>

                          <div class="col-md-6">
                              <input id="jumlah_santri" type="text" class="form-control" name="jumlah_santri" value="{{ old('jumlah_santri') }}">

                              @if ($errors->has('jumlah_santri'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('jumlah_santri') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('jumlah_santri_mukim') ? ' has-error' : '' }}">
                          <label for="jumlah_santri_mukim" class="col-md-4 control-label">Jumlah Santri Mukim</label>

                          <div class="col-md-6">
                              <input id="jumlah_santri_mukim" type="text" class="form-control" name="jumlah_santri_mukim" value="{{ old('jumlah_santri_mukim') }}">

                              @if ($errors->has('jumlah_santri_mukim'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('jumlah_santri_mukim') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('no_telepon') ? ' has-error' : '' }}">
                          <label for="no_telepon" class="col-md-4 control-label">Nomor Telepon</label>

                          <div class="col-md-6">
                              <input id="no_telepon" type="text" class="form-control" name="no_telepon" value="{{ old('no_telepon') }}">

                              @if ($errors->has('no_telepon'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('no_telepon') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                          <label for="website" class="col-md-4 control-label">Alamat Website</label>

                          <div class="col-md-6">
                              <input id="website" type="text" class="form-control" name="website" value="{{ old('website') }}">

                              @if ($errors->has('website'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('website') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('alamat_pesantren') ? ' has-error' : '' }}">
                          <label for="alamat_pesantren" class="col-md-4 control-label">Alamat Pesantren</label>

                          <div class="col-md-6">
                              <input id="alamat_pesantren" type="text" class="form-control" name="alamat_pesantren" value="{{ old('alamat_pesantren') }}">

                              @if ($errors->has('alamat_pesantren'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('alamat_pesantren') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('kecamatan_pesantren') ? ' has-error' : '' }}">
                          <label for="kecamatan_pesantren" class="col-md-4 control-label">Kecamatan</label>

                          <div class="col-md-6">
                              <input id="kecamatan_pesantren" type="text" class="form-control" name="kecamatan_pesantren" value="{{ old('kecamatan_pesantren') }}">

                              @if ($errors->has('kecamatan_pesantren'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('kecamatan_pesantren') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('nama_kabupaten') ? ' has-error' : '' }}">
                      		<label for="nama_kabupaten" class="col-md-4 control-label">Kabupaten</label>

                      		<div class="col-md-6">
                      				{!! Form::select('kabupaten_id_kabupaten', $kabupaten, null,['class' => 'kabupaten form-control', 'placeholder' => 'Pilih Kabupaten']) !!}

                      				@if ($errors->has('nama_kabupaten'))
                      						<span class="help-block">
                      								<strong>{{ $errors->first('nama_kabupaten') }}</strong>
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

@section('script')
  <script src="{{ asset('js/selectize.min.js') }}"></script>
  <script>
    $(document).ready(function () {
      $('.kabupaten').selectize({
        create: true,
        sortField: {
            field: 'text',
            direction: 'asc'
        },
        dropdownParent: 'body'
      });
    });
  </script>
@endsection
