<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PDPP - Pangkalan Data Pondok Pesantren</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ asset('css/timeline.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/pdpp.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('bower_components/morrisjs/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('favicon.ico') }}" rel="shortcut icon">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('css')

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href={!! URL::to('/') !!}>PDPP</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li><a href="{!! URL::to('/admin/changepassword') !!}"><i class="fa fa-user fa-fw"></i> Ganti Password</a>
                <li class="divider"></li>
                <li><a href="{!! URL::to('/logout') !!}"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{!! URL::to('/admin') !!}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="{!! URL::to('admin/pesantren') !!}"><i class="fa fa-table fa-fw"></i> Pesantren</a>
                        </li>
                        <li>
                            <a href="{!! URL::to('admin/provinsi') !!}"><i class="fa fa-database fa-fw"></i> Provinsi</a>
                        </li>
                        <li>
                            <a href="{!! URL::to('admin/kabupaten') !!}"><i class="fa fa-database fa-fw"></i> Kabupaten</a>
                        </li>
                        <li>
                            <a href="{!! URL::to('admin/tipepesantren') !!}"><i class="fa fa-database fa-fw"></i> Tipe Pesantren</a>
                        </li>
                        <li>
                            <a href="{!! URL::to('admin/konsentrasi') !!}"><i class="fa fa-database fa-fw"></i> Konsentrasi Pesantren</a>
                        </li>
                        <li>
                            <a href="{!! URL::to('admin/potensiekonomi') !!}"><i class="fa fa-database fa-fw"></i> Potensi Ekonomi</a>
                        </li>
                        <li>
                            <a href="{!! URL::to('admin/pengguna') !!}"><i class="fa fa-user fa-fw"></i> Pengguna</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
          @if (session('pesan'))
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="alert alert-success fade in top10 bottom7">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  {{ session('pesan') }}
              </div>
            </div>
          </div>
          @endif

          @yield('content')
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

    <!-- Morris Charts JavaScript
    <script src="{{ asset('bower_components/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('bower_components/morrisjs/morris.min.js') }}"></script>
    <script src="{{ asset('js/morris-data.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('js/sb-admin-2.js') }}"></script>

    @yield('script')

</body>

</html>
