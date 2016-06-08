<div class="form-group{{ $errors->has('NIK') ? ' has-error' : '' }}">
		<label for="NIK" class="col-md-4 control-label">Nomor KTP/NIK</label>

		<div class="col-md-6">
				{!! Form::text('NIK', null,['class' => 'form-control']) !!}

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
				{!! Form::text('nama_pengasuh', null,['class' => 'form-control']) !!}

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
				{!! Form::select('jabatan', [ '100' =>'--Pilih Jabatan--']+$jabatan, $pengasuh->jabatan,['class' => 'form-control']) !!}

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
				{!! Form::text('hp_pengasuh', null,['class' => 'form-control']) !!}

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
				{!! Form::text('email_pengasuh', null,['class' => 'form-control']) !!}

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
				{!! Form::text('facebook_pengasuh', null,['class' => 'form-control']) !!}

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
