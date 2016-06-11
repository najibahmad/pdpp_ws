@extends('admin.layout')

@section('content')
<div class="container">
  <div class="row top20">
      <div class="col-md-6 col-sm-6 col-xs-12">
  				<div class="panel panel-default">
  						<div class="panel-heading">Merubah Pengguna</div>
  						<div class="panel-body">
  								{!! Form::model($user,['method' => 'PATCH','url' => ['admin/pengguna',$user->id_pengguna], 'class'=>'form-horizontal']) !!}
  										@include ('pengguna.form', ['text' => 'Simpan'])
  								{!! Form::close() !!}
  						</div>
  						<!-- /.panel-body -->
  				</div>
  				<!-- /.panel -->
  		</div>
  		<!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
</div>
@stop
