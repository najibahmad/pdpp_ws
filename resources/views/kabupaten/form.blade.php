<div class="form-group{{ $errors->has('nama_kabupaten') ? ' has-error' : '' }}">
		<label for="nama_kabupaten" class="col-md-4 control-label">Nama Kabupaten</label>

		<div class="col-md-6">
				{!! Form::text('nama_kabupaten', null,['class' => 'form-control']) !!}
				@if ($errors->has('nama_kabupaten'))
						<span class="help-block">
								<strong>{{ $errors->first('nama_kabupaten') }}</strong>
						</span>
				@endif
		</div>
</div>
<div class="form-group{{ $errors->has('nama_provinsi') ? ' has-error' : '' }}">
		<label for="nama_provinsi" class="col-md-4 control-label">Nama Provinsi</label>

		<div class="col-md-6">
				{!! Form::select('provinsi_id_provinsi', $prov, null,['class' => 'provinsi form-control', 'placeholder' => 'Pilih Provinsi']) !!}

				@if ($errors->has('nama_provinsi'))
						<span class="help-block">
								<strong>{{ $errors->first('nama_provinsi') }}</strong>
						</span>
				@endif
		</div>
</div>

<div class="form-group">
		<div class="col-md-6 col-md-offset-4">
				<button type="submit" class="btn btn-primary">
						<i class="fa fa-btn fa-user"></i> Simpan
				</button>
		</div>
</div>
