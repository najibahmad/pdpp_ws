@extends('admin.layout')

@section('content')
<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
				<h2 class="page-header top15">Ganti Password Pengguna</h2>
		</div>
		<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default">
						<div class="panel-heading">Ganti Password Pengguna</div>
						<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
										<form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/changepassword') }}">
	                      {{ csrf_field() }}
												<div class="form-group{{ $errors->has('Password_Lama') ? ' has-error' : '' }}">
	                          <label for="Password_Lama" class="col-md-4 control-label">Password Saat Ini</label>

	                          <div class="col-md-6">
	                              <input id="Password_Lama" type="password" placeholder="Password Lama" class="form-control" name="Password_Lama">

	                              @if ($errors->has('Password_Lama'))
	                                  <span class="help-block">
	                                      <strong>{{ $errors->first('Password_Lama') }}</strong>
	                                  </span>
	                              @endif
	                          </div>
	                      </div>
												<div class="form-group{{ $errors->has('Password_Baru') ? ' has-error' : '' }}">
	                          <label for="Password_Baru" class="col-md-4 control-label">Password Baru</label>

	                          <div class="col-md-6">
	                              <input id="Password_Baru" type="password" placeholder="Password Baru" class="form-control" name="Password_Baru">

	                              @if ($errors->has('Password_Baru'))
	                                  <span class="help-block">
	                                      <strong>{{ $errors->first('Password_Baru') }}</strong>
	                                  </span>
	                              @endif
	                          </div>
	                      </div>
												<div class="form-group{{ $errors->has('Konfirmasi_Password') ? ' has-error' : '' }}">
	                          <label for="Konfirmasi_Password" class="col-md-4 control-label">Konfirmasi Password</label>

	                          <div class="col-md-6">
	                              <input id="Konfirmasi_Password" type="password" placeholder="Konfirmasi Password" class="form-control" name="Konfirmasi_Password">

	                              @if ($errors->has('Konfirmasi_Password'))
	                                  <span class="help-block">
	                                      <strong>{{ $errors->first('Konfirmasi_Password') }}</strong>
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
								<!-- /.row (nested) -->
                <div class="row">
                  <div class="col-md-12">
                  </div>
                </div>

						</div>
						<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
@stop
