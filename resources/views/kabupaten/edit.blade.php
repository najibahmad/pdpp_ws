@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row top20">
        <div class="col-md-6 col-sm-6 col-xs-12">
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
