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
<div class="form-group{{ $errors->has('jumlah_santri') ? ' has-error' : '' }}">
		<label for="jumlah_santri" class="col-md-4 control-label">Jumlah Santri</label>

		<div class="col-md-6">
				{!! Form::text('jumlah_santri', null,['class' => 'form-control']) !!}

				@if ($errors->has('jumlah_santri'))
						<span class="help-block">
								<strong>{{ $errors->first('jumlah_santri') }}</strong>
						</span>
				@endif
		</div>
</div>
<div class="form-group{{ $errors->has('nama_pengasuh') ? ' has-error' : '' }}">
		<label for="nama_pengasuh" class="col-md-4 control-label">Nama Pengasuh</label>

		<div class="col-md-6">
				{!! Form::select('pengasuh_id_pengasuh', $pengasuh, $pesantren->pengasuh_id_pengasuh,['class' => 'form-control']) !!}

				@if ($errors->has('nama_pengasuh'))
						<span class="help-block">
								<strong>{{ $errors->first('nama_pengasuh') }}</strong>
						</span>
				@endif
		</div>
</div>
<div class="form-group{{ $errors->has('nama_kabupaten') ? ' has-error' : '' }}">
		<label for="nama_kabupaten" class="col-md-4 control-label">Kabupaten</label>

		<div class="col-md-6">
				{!! Form::select('kabupaten_id_kabupaten', $kabupaten, $pesantren->kabupaten_id_kabupaten,['class' => 'form-control']) !!}

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
