@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row top20">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Nama Potensi Ekonomi</div>
                <div class="panel-body">
                  {!! Form::model($ekonomi,['method' => 'PATCH','url' => ['admin/potensiekonomi',$ekonomi->id_potensi_ekonomi]]) !!}
                    @include ('potensiekonomi.form')
                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
