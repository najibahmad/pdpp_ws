@extends('admin.layout')

@section('content')
<div class="row">
		<div class="col-lg-12">
				<h1 class="page-header">Membuat Pengguna Baru</h1>
		</div>
		<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
		<div class="col-lg-6">
				<div class="panel panel-default">
						<div class="panel-heading">Menambah Pengguna</div>
						<div class="panel-body">
							<form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/pengguna') }}">
									{{ csrf_field() }}

									<div class="form-group{{ $errors->has('nama_pengguna') ? ' has-error' : '' }}">
											<label for="nama_pengguna" class="col-md-4 control-label">Nama Pengguna</label>

											<div class="col-md-6">
													<input id="nama_pengguna" type="text" class="form-control" name="nama_pengguna" value="{{ old('nama_pengguna') }}">

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
													<input id="email_pengguna" type="text" class="form-control" name="email_pengguna" value="{{ old('email_pengguna') }}">

													@if ($errors->has('email_pengguna'))
															<span class="help-block">
																	<strong>{{ $errors->first('email_pengguna') }}</strong>
															</span>
													@endif
											</div>
									</div>
									<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
											<label for="password" class="col-md-4 control-label">Password</label>

											<div class="col-md-6">
												  {!! Form::password('password', [ 'class'=> 'form-control','id'=>'password']) !!}
													<!-- <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}">
													-->
													@if ($errors->has('password'))
															<span class="help-block">
																	<strong>{{ $errors->first('password') }}</strong>
															</span>
													@endif
											</div>
									</div>
									<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
											<label for="password_confirmation" class="col-md-4 control-label">Konfirmasi Password</label>

											<div class="col-md-6">
													{!! Form::password('password_confirmation', [ 'class'=> 'form-control','id'=>'password']) !!}
													<!--<input id="password_confirmation" type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}">
													-->
													@if ($errors->has('password_confirmation'))
															<span class="help-block">
																	<strong>{{ $errors->first('password_confirmation') }}</strong>
															</span>
													@endif
											</div>
									</div>
									<div class="form-group{{ $errors->has('hak_akses') ? ' has-error' : '' }}">
											<label for="hak_akses" class="col-md-4 control-label">Hak Akses</label>

											<div class="col-md-6">
												  {!! Form::select('hak_akses', ['255'=> 'Administrator','200' => 'Manager Pusat','100' => 'Manager Propinsi'], null,['class' => 'form-control']) !!}

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
							</form>
						</div>
						<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
@endsection
