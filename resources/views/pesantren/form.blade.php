<div class="form-group{{ $errors->has('NSPP') ? ' has-error' : '' }}">
		<label for="NSPP" class="col-md-4 control-label">NSPP Pondok</label>

		<div class="col-md-6">
				{!! Form::text('NSPP', null,['class' => 'form-control']) !!}

				@if ($errors->has('NSPP'))
						<span class="help-block">
								<strong>{{ $errors->first('NSPP') }}</strong>
						</span>
				@endif
		</div>
</div>
<div class="form-group{{ $errors->has('nama_pesantren') ? ' has-error' : '' }}">
		<label for="nama_pesantren" class="col-md-4 control-label">Nama Pesantren</label>

		<div class="col-md-6">
				{!! Form::text('nama_pesantren', null,['class' => 'form-control']) !!}

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
				{!! Form::text('nama_pengasuh', null,['class' => 'form-control']) !!}

				@if ($errors->has('nama_pengasuh'))
						<span class="help-block">
								<strong>{{ $errors->first('nama_pengasuh') }}</strong>
						</span>
				@endif
		</div>
</div>
<div class="panel panel-default">
	<div class="panel-body">
		<div class="form-group{{ $errors->has('jumlah_santri_mukim_pria') ? ' has-error' : '' }}">
				<label for="jumlah_santri_mukim_pria" class="col-md-4 control-label">Jumlah Santri Mukim</label>

				<div class="col-md-6">
						{!! Form::text('jumlah_santri_mukim_pria', $santri[0]->jumlah_santri_mukim_pria,['class' => 'form-control']) !!}

						@if ($errors->has('jumlah_santri_mukim_pria'))
								<span class="help-block">
										<strong>{{ $errors->first('jumlah_santri_mukim_pria') }}</strong>
								</span>
						@endif
				</div>
		</div>
		<div class="form-group{{ $errors->has('jumlah_santri_mukim_wanita') ? ' has-error' : '' }}">
				<label for="jumlah_santri_mukim_wanita" class="col-md-4 control-label">Jumlah Santriwati Mukim</label>

				<div class="col-md-6">
						{!! Form::text('jumlah_santri_mukim_wanita', $santri[0]->jumlah_santri_mukim_wanita,['class' => 'form-control']) !!}

						@if ($errors->has('jumlah_santri_mukim_wanita'))
								<span class="help-block">
										<strong>{{ $errors->first('jumlah_santri_mukim_wanita') }}</strong>
								</span>
						@endif
				</div>
		</div>
		<div class="form-group{{ $errors->has('jumlah_santri_tidak_mukim_pria') ? ' has-error' : '' }}">
				<label for="jumlah_santri_tidak_mukim_pria" class="col-md-4 control-label">Jumlah Santri Tidak Mukim</label>

				<div class="col-md-6">
						{!! Form::text('jumlah_santri_tidak_mukim_pria', $santri[0]->jumlah_santri_tidak_mukim_pria,['class' => 'form-control']) !!}

						@if ($errors->has('jumlah_santri_tidak_mukim_pria'))
								<span class="help-block">
										<strong>{{ $errors->first('jumlah_santri_tidak_mukim_pria') }}</strong>
								</span>
						@endif
				</div>
		</div>
		<div class="form-group{{ $errors->has('jumlah_santri_tidak_mukim_wanita') ? ' has-error' : '' }}">
				<label for="jumlah_santri_tidak_mukim_wanita" class="col-md-4 control-label">Jumlah Santriwati Tidak Mukim</label>

				<div class="col-md-6">
						{!! Form::text('jumlah_santri_tidak_mukim_wanita', $santri[0]->jumlah_santri_tidak_mukim_wanita,['class' => 'form-control']) !!}

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
						{!! Form::text('nonformal_pria', $tenaga_pengajar[0]->nonformal_pria,['class' => 'form-control']) !!}
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
						{!! Form::text('nonformal_wanita', $tenaga_pengajar[0]->nonformal_wanita,['class' => 'form-control']) !!}
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
						{!! Form::text('formal_nonsarjana_pria', $tenaga_pengajar[0]->formal_nonsarjana_pria,['class' => 'form-control']) !!}
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
						{!! Form::text('formal_nonsarjana_wanita', $tenaga_pengajar[0]->formal_nonsarjana_wanita,['class' => 'form-control']) !!}
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
						{!! Form::text('formal_sarjana_pria', $tenaga_pengajar[0]->formal_sarjana_pria,['class' => 'form-control']) !!}
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
						{!! Form::text('formal_sarjana_wanita', $tenaga_pengajar[0]->formal_sarjana_wanita,['class' => 'form-control']) !!}
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
						{!! Form::text('formal_pascasarjana_pria', $tenaga_pengajar[0]->formal_pascasarjana_pria,['class' => 'form-control']) !!}
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
						{!! Form::text('formal_pascasarjana_wanita', $tenaga_pengajar[0]->formal_pascasarjana_wanita,['class' => 'form-control']) !!}
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
				{!! Form::text('no_telepon', null,['class' => 'form-control']) !!}

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
				{!! Form::text('website', null,['class' => 'form-control']) !!}

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
				{!! Form::text('alamat_pesantren', null,['class' => 'form-control']) !!}

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
				{!! Form::text('kecamatan_pesantren', null,['class' => 'form-control']) !!}

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
				{!! Form::select('kabupaten_id_kabupaten', $kabupaten, $pesantren->kabupaten_id_kabupaten,['class' => 'kabupaten form-control', 'placeholder' => 'Pilih Kabupaten']) !!}

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
