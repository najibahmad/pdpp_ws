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
						<div class="panel-heading">
								Menambah Pengguna
						</div>
						<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
										{!! Form::open(['url' => 'admin/users']) !!}
											@include('user.form', ['text' => 'Save'])
										{!! Form::close() !!}

											<div class="row">
												<div class="col-md-12">
													@include('errors.list')
												</div>
											</div>
									</div>
								</div>
								<!-- /.row (nested) -->
						</div>
						<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
@stop
