@extends('admin.layout')

@section('css')
  <link href="{{ asset('css/selectize.css') }}" rel="stylesheet">
  <link href="{{ asset('css/selectize.bootstrap3.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row top20">
        <div class="col-md-10 col-sm-10 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Data Pesantren</div>
                {!! Form::model($pesantren,['method' => 'PATCH','url' => ['admin/pesantren',$pesantren->id_pesantren],'class' => 'form-horizontal']) !!}
                  <div class="panel-body">
                    @include ('pesantren.form', ['text' => 'Simpan'])
                  </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
  <script src="{{ asset('js/selectize.min.js') }}"></script>
  <script>
    $(document).ready(function () {
      $('.kabupaten').selectize({
        create: false,
        sortField: {
            field: 'id_kabupaten',
            direction: 'asc'
        },
        dropdownParent: 'body'
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      $('.tipe_pesantren').selectize({
        create: false,
        sortField: {
            field: 'tipe_pesantren_id',
            direction: 'asc'
        },
        dropdownParent: 'body'
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      $('.potensi_ekonomi').selectize({
        create: false,
        sortField: {
            field: 'potensi_ekonomi_id',
            direction: 'asc'
        },
        dropdownParent: 'body'
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      $('.konsentrasi').selectize({
        create: false,
        sortField: {
            field: 'konsentrasi_id',
            direction: 'asc'
        },
        dropdownParent: 'body'
      });
    });
  </script>
@endsection
