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
                <div class="panel-heading"><strong>Membuat Pesantren Baru</strong></div>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/pesantren') }}">
                  <div class="panel-body">
                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('NSPP') ? ' has-error' : '' }}">
                          <label for="NSPP" class="col-md-4 control-label">NSPP Pondok</label>

                          <div class="col-md-6">
                              <input id="NSPP" type="text" class="form-control" name="NSPP" value="{{ old('NSPP') }}" placeholder="Nomor Statistik Pondok Pesantren">

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
                      <div class="form-group{{ $errors->has('tahun_berdiri') ? ' has-error' : '' }}">
                          <label for="tahun_berdiri" class="col-md-4 control-label">Tahun Berdiri</label>

                          <div class="col-md-6">
                              <input id="tahun_berdiri" type="text" class="form-control" name="tahun_berdiri" value="{{ old('tahun_berdiri') }}">

                              @if ($errors->has('tahun_berdiri'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('tahun_berdiri') }}</strong>
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
                      <!-- Santri -->
                      <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="form-group{{ $errors->has('jumlah_santri_mukim_pria') ? ' has-error' : '' }}">
                              <label for="jumlah_santri_mukim_pria" class="col-md-4 control-label">Jumlah Santri Mukim</label>

                              <div class="col-md-6">
                                  <input id="jumlah_santri_mukim_pria" type="text" class="form-control" name="jumlah_santri_mukim_pria" value="{{ old('jumlah_santri_mukim_pria') }}">

                                  @if ($errors->has('jumlah_santri_mukim_pria'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('jumlah_santri_mukim_pria') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group{{ $errors->has('jumlah_santri_tidak_mukim_pria') ? ' has-error' : '' }}">
                              <label for="jumlah_santri_tidak_mukim_pria" class="col-md-4 control-label">Jumlah Santri Tidak Mukim</label>

                              <div class="col-md-6">
                                  <input id="jumlah_santri_tidak_mukim_pria" type="text" class="form-control" name="jumlah_santri_tidak_mukim_pria" value="{{ old('jumlah_santri_tidak_mukim_pria') }}">

                                  @if ($errors->has('jumlah_santri_tidak_mukim_pria'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('jumlah_santri_tidak_mukim_pria') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group{{ $errors->has('jumlah_santri_mukim_wanita') ? ' has-error' : '' }}">
                              <label for="jumlah_santri_mukim_wanita" class="col-md-4 control-label">Jumlah Santriwati Mukim</label>

                              <div class="col-md-6">
                                  <input id="jumlah_santri_mukim_wanita" type="text" class="form-control" name="jumlah_santri_mukim_wanita" value="{{ old('jumlah_santri_mukim_wanita') }}">

                                  @if ($errors->has('jumlah_santri_mukim_wanita'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('jumlah_santri_mukim_wanita') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group{{ $errors->has('jumlah_santri_tidak_mukim_wanita') ? ' has-error' : '' }}">
                              <label for="jumlah_santri_tidak_mukim_wanita" class="col-md-4 control-label">Jumlah Santriwati Tidak Mukim</label>

                              <div class="col-md-6">
                                  <input id="jumlah_santri_tidak_mukim_wanita" type="text" class="form-control" name="jumlah_santri_tidak_mukim_wanita" value="{{ old('jumlah_santri_tidak_mukim_wanita') }}">

                                  @if ($errors->has('jumlah_santri_tidak_mukim_wanita'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('jumlah_santri_tidak_mukim_wanita') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                        </div>
                      </div> <!-- Santri End -->
                      <!-- Tenaga Pendidik -->
                      <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="form-group{{ $errors->has('nonformal_pria') ? ' has-error' : '' }}">
                              <label for="nonformal_pria" class="col-md-4 control-label">Nonformal Pria</label>

                              <div class="col-md-6">
                                  <input id="nonformal_pria" type="text" class="form-control" name="nonformal_pria" value="{{ old('nonformal_pria') }}">

                                  @if ($errors->has('nonformal_pria'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('nonformal_pria') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group{{ $errors->has('nonformal_wanita') ? ' has-error' : '' }}">
                              <label for="nonformal_wanita" class="col-md-4 control-label">Nonformal Wanita</label>

                              <div class="col-md-6">
                                  <input id="nonformal_wanita" type="text" class="form-control" name="nonformal_wanita" value="{{ old('nonformal_wanita') }}">

                                  @if ($errors->has('nonformal_wanita'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('nonformal_wanita') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group{{ $errors->has('formal_nonsarjana_pria') ? ' has-error' : '' }}">
                              <label for="formal_nonsarjana_pria" class="col-md-4 control-label">Formal Non Sarjana Pria</label>

                              <div class="col-md-6">
                                  <input id="formal_nonsarjana_pria" type="text" class="form-control" name="formal_nonsarjana_pria" value="{{ old('formal_nonsarjana_pria') }}">

                                  @if ($errors->has('formal_nonsarjana_pria'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('formal_nonsarjana_pria') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group{{ $errors->has('formal_nonsarjana_wanita') ? ' has-error' : '' }}">
                              <label for="formal_nonsarjana_wanita" class="col-md-4 control-label">Formal Non Sarjana Wanita</label>

                              <div class="col-md-6">
                                  <input id="formal_nonsarjana_wanita" type="text" class="form-control" name="formal_nonsarjana_wanita" value="{{ old('formal_nonsarjana_wanita') }}">

                                  @if ($errors->has('formal_nonsarjana_wanita'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('formal_nonsarjana_wanita') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group{{ $errors->has('formal_sarjana_pria') ? ' has-error' : '' }}">
                              <label for="formal_sarjana_pria" class="col-md-4 control-label">Formal Sarjana Pria</label>

                              <div class="col-md-6">
                                  <input id="formal_sarjana_pria" type="text" class="form-control" name="formal_sarjana_pria" value="{{ old('formal_sarjana_pria') }}">

                                  @if ($errors->has('formal_sarjana_pria'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('formal_sarjana_pria') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group{{ $errors->has('formal_sarjana_wanita') ? ' has-error' : '' }}">
                              <label for="formal_sarjana_wanita" class="col-md-4 control-label">Formal Sarjana Wanita</label>

                              <div class="col-md-6">
                                  <input id="formal_sarjana_wanita" type="text" class="form-control" name="formal_sarjana_wanita" value="{{ old('formal_sarjana_wanita') }}">

                                  @if ($errors->has('formal_sarjana_wanita'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('formal_sarjana_wanita') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group{{ $errors->has('formal_pascasarjana_pria') ? ' has-error' : '' }}">
                              <label for="formal_pascasarjana_pria" class="col-md-4 control-label">Formal Pasca Sarjana Pria</label>

                              <div class="col-md-6">
                                  <input id="formal_pascasarjana_pria" type="text" class="form-control" name="formal_pascasarjana_pria" value="{{ old('formal_pascasarjana_pria') }}">

                                  @if ($errors->has('formal_pascasarjana_pria'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('formal_pascasarjana_pria') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group{{ $errors->has('formal_pascasarjana_wanita') ? ' has-error' : '' }}">
                              <label for="formal_pascasarjana_wanita" class="col-md-4 control-label">Formal Pasca Sarjana Wanita</label>

                              <div class="col-md-6">
                                  <input id="formal_pascasarjana_wanita" type="text" class="form-control" name="formal_pascasarjana_wanita" value="{{ old('formal_pascasarjana_wanita') }}">

                                  @if ($errors->has('formal_pascasarjana_wanita'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('formal_pascasarjana_wanita') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                        </div>
                      </div> <!-- Tenaga Pendidik End -->
                      <div class="form-group{{ $errors->has('tipe_pesantren_id') ? ' has-error' : '' }}">
                      		<label for="tipe_pesantren_id" class="col-md-4 control-label">Tipe/Jenis Pesantren</label>

                      		<div class="col-md-6">
                      				{!! Form::select('tipe_pesantren_id', $tipe_pesantren, null,['class' => 'tipe_pesantren form-control', 'placeholder' => 'Tulis/Pilih Tipe Pesantren']) !!}

                      				@if ($errors->has('tipe_pesantren_id'))
                      						<span class="help-block">
                      								<strong>{{ $errors->first('tipe_pesantren_id') }}</strong>
                      						</span>
                      				@endif
                      		</div>
                      </div>
                      <div class="form-group{{ $errors->has('konsentrasi_id') ? ' has-error' : '' }}">
                      		<label for="konsentrasi_id" class="col-md-4 control-label">Konsentrasi Bidang</label>

                      		<div class="col-md-6">
                      				{!! Form::select('konsentrasi_id', $konsentrasi, null,['class' => 'konsentrasi form-control', 'placeholder' => 'Tulis/Pilih Konsentrasi Bidang']) !!}

                      				@if ($errors->has('konsentrasi_id'))
                      						<span class="help-block">
                      								<strong>{{ $errors->first('konsentrasi_id') }}</strong>
                      						</span>
                      				@endif
                      		</div>
                      </div>
                      <div class="form-group{{ $errors->has('potensi_ekonomi_id') ? ' has-error' : '' }}">
                      		<label for="potensi_ekonomi_id" class="col-md-4 control-label">Potensi Ekonomi</label>

                      		<div class="col-md-6">
                      				{!! Form::select('potensi_ekonomi_id', $potensi_ekonomi, null,['class' => 'potensi_ekonomi form-control', 'placeholder' => 'Tulis/Pilih Potensi Ekonomi']) !!}

                      				@if ($errors->has('potensi_ekonomi_id'))
                      						<span class="help-block">
                      								<strong>{{ $errors->first('potensi_ekonomi_id') }}</strong>
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
                      <div class="form-group{{ $errors->has('longitude') ? ' has-error' : '' }}">
                          <label for="longitude" class="col-md-4 control-label">Longitude</label>

                          <div class="col-md-6">
                              <input id="longitude" type="text" class="form-control" name="longitude" value="{{ old('longitude') }}">

                              @if ($errors->has('longitude'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('longitude') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group{{ $errors->has('latitude') ? ' has-error' : '' }}">
                          <label for="latitude" class="col-md-4 control-label">Latitude</label>

                          <div class="col-md-6">
                              <input id="latitude" type="text" class="form-control" name="latitude" value="{{ old('latitude') }}">

                              @if ($errors->has('latitude'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('latitude') }}</strong>
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
                      				{!! Form::select('kabupaten_id_kabupaten', $kabupaten, null,['class' => 'kabupaten form-control', 'placeholder' => 'Tulis/Pilih Kabupaten']) !!}

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
                    </div>
                </form>
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
        create: false,
        sortField: {
            field: 'id_kabupaten',
            direction: 'asc'
        },
        dropdownParent: 'body'
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      $('.tipe_pesantren').selectize({
        create: false,
        sortField: {
            field: 'tipe_pesantren_id',
            direction: 'asc'
        },
        dropdownParent: 'body'
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      $('.potensi_ekonomi').selectize({
        create: false,
        sortField: {
            field: 'potensi_ekonomi_id',
            direction: 'asc'
        },
        dropdownParent: 'body'
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      $('.konsentrasi').selectize({
        create: false,
        sortField: {
            field: 'konsentrasi_id',
            direction: 'asc'
        },
        dropdownParent: 'body'
      });
    });
  </script>
@endsection
