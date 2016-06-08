@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Nama Kabupaten</div>
                <div class="panel-body">
                  {!! Form::model($kab,['method' => 'PATCH','url' => ['admin/kabupaten',$kab->id_kabupaten],'class' => 'form-horizontal']) !!}
                    @include ('kabupaten.form', ['text' => 'Simpan'])
                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
