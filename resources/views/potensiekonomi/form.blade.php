<div class="form-group{{ $errors->has('nama_potensi_ekonomi') ? ' has-error' : '' }}">
	<label for="nama_potensi_ekonomi" class="col-md-4 control-label">Nama Potensi Ekonomi</label>

	<div class="col-md-6">
			{!! Form::text('nama_potensi_ekonomi',null, ['class' => 'form-control']) !!}
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
