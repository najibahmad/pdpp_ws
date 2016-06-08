@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.

                    <ul>
                        <li><a href="{{ url('/admin/provinsi') }}">  Provinsi</a></li>
                        <li><a href="{{ url('/admin/kabupaten') }}">  Kabupaten</a></li>
                        <li><a href="{{ url('/admin/pengasuh') }}">  Pengasuh</a></li>
                        <li><a href="{{ url('/admin/pesantren') }}">  Pesantren</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
