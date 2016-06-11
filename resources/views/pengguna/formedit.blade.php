<div class="form-group">
	{!! Form::label('username', 'Nama Pengguna :') !!}
	{!! Form::text('username', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('email', 'Alamat E-Mail :') !!}
	{!! Form::text('email', null, [ 'class'=> 'form-control', 'placeholder'=>'Alamat email' ]) !!}
 </div>
<div class="form-group">
	{!! Form::label('role', 'Hak Akses :') !!}
	{!! Form::select('role', ['255'=> 'Administrator','200' => 'Manager Pusat','100' => 'Manager Propinsi'], $user->role, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>
