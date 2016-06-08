<div class="form-group form-horizontal">
	{!! Form::label('nama_provinsi', 'Nama Provinsi :') !!}
	{!! Form::text('nama_provinsi',null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-md-4 col-md-offset-4">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>
