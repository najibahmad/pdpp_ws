@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row top20">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Tipe Pesantren</div>
                <div class="panel-body">
                  {!! Form::model($tipe,['method' => 'PATCH','url' => ['admin/tipepesantren',$tipe->id_tipe_pesantren]]) !!}
                    @include ('tipepesantren.form', ['text' => 'Simpan'])
                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
