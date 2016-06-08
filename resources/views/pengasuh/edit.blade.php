@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Nama Pengasuh</div>
                <div class="panel-body">
                  {!! Form::model($pengasuh,['method' => 'PATCH','url' => ['admin/pengasuh',$pengasuh->id_pengasuh],'class' => 'form-horizontal']) !!}
                    @include ('pengasuh.form', ['text' => 'Simpan'])
                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
