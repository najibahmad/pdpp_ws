@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row top20">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Nama Pesantren</div>
                <div class="panel-body">
                  {!! Form::model($pesantren,['method' => 'PATCH','url' => ['admin/pesantren',$pesantren->id_pesantren],'class' => 'form-horizontal']) !!}
                    @include ('pesantren.form', ['text' => 'Simpan'])
                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
