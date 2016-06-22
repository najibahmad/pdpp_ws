<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PDPP Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/form-elements.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link href="{{ asset('favicon.png') }}" rel="shortcut icon">
        <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
        <!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png"> -->

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>
									                <strong>PDPP KEMENAG RI</strong>
									            </h3>
                            	<p>Pangkalan Data Pondok Pesantren Kementerian Agama Republik Indonesia</p>
                        		</div>
                        		<div class="form-top-right">
									              <img src="img/icon.jpg" alt="">
                        		</div>
                            </div>
                            <div class="form-bottom">
                          <form class="login-form" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}

			                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              <label class="sr-only" for="email_pengguna" >E-Mail Address</label>
                                <input id="email_pengguna" type="email" placeholder="E-Mail..."class="form-username form-control" name="email_pengguna" value="{{ old('email_pengguna') }}">

                                @if ($errors->has('email_pengguna'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email_pengguna') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                              <label class="sr-only" for="password">Password</label>
                              <input id="password" type="password" placeholder="Kata Sandi..."class="form-password form-control" name="password">

                              @if ($errors->has('form-password'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('form-password') }}</strong>
                                  </span>
                              @endif
                            </div>
                            <button type="submit" class="btn"><i class="fa fa-btn fa-sign-in"></i> Masuk</button>
                            <!-- <label>
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Lupa Password?</a>
                            </label> -->
			                    </form>
		                    </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <!-- Javascript -->
        <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.backstretch.min.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>>

        <!--[if lt IE 10]>
            <script src="{{ asset('js/placeholder.js') }}"></script>
        <![endif]-->

    </body>

</html>
