{{ csrf_field() }}

<div class="form-group{{ $errors->has('nama_pengguna') ? ' has-error' : '' }}">
		<label for="nama_pengguna" class="col-md-4 control-label">Nama Pengguna</label>

		<div class="col-md-6">
				{!! Form::text('nama_pengguna', null,['class' => 'form-control']) !!}

				@if ($errors->has('nama_pengguna'))
						<span class="help-block">
								<strong>{{ $errors->first('nama_pengguna') }}</strong>
						</span>
				@endif
		</div>
</div>
<div class="form-group{{ $errors->has('email_pengguna') ? ' has-error' : '' }}">
		<label for="email_pengguna" class="col-md-4 control-label">Alamat E-Mail Pengguna</label>

		<div class="col-md-6">
				{!! Form::text('email_pengguna', null,['class' => 'form-control']) !!}
				
				@if ($errors->has('email_pengguna'))
						<span class="help-block">
								<strong>{{ $errors->first('email_pengguna') }}</strong>
						</span>
				@endif
		</div>
</div>
<div class="form-group{{ $errors->has('hak_akses') ? ' has-error' : '' }}">
		<label for="hak_akses" class="col-md-4 control-label">Hak Akses</label>

		<div class="col-md-6">
				{!! Form::select('hak_akses', ['255'=> 'Administrator','200' => 'Manager Pusat','100' => 'Manager Propinsi'], $user->hak_akses,['class' => 'form-control']) !!}

				@if ($errors->has('hak_akses'))
						<span class="help-block">
								<strong>{{ $errors->first('hak_akses') }}</strong>
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
