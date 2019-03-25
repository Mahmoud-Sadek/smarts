<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

    <meta name="keywords" content="HTML5 Template">
	<meta name="description" content="Wokiee - Responsive HTML5 Template">
	<meta name="author" content="wokiee">
	<link rel="shortcut icon" href="favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/theme-rtl.css">
</head>
<body>



<div id="loader-wrapper">
	<div id="loader">
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
	</div>
</div>




<div id="tt-pageContent">
	<div class="container-indent">
		<div class="container">



			<div class="text-right">
				<a href="index-ar.html" class="text-bold">
					العربية
				</a>
			</div>





			<div class="text-center">
				<a class="tt-logo tt-logo-alignment m-4" href="index.html"><img src="images/custom/logo.png" alt=""></a>
				<p class="mb-3">
					Welcome back!
				</p>
				<h3>Sign in to your account</h3>
				<p class="mb-3">
					Don’t have an account? <a href="{{ route('register') }}" class="log-in">Sign up</a>
				</p>
			</div>






			<div class="tt-login-form">
				<div class="row justify-content-center">
					<div class="col-md-8 col-lg-6">
						<div class="tt-item">
							<div class="form-default">







                    <form id="contactform Myform" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">



                                <input id="loginInputEmail" placeholder="E-mail" type="email" class="form-control{{ $errors->has('admin_email') ? ' is-invalid' : '' }}" name="admin_email" value="{{ old('admin_email') }}" required autofocus>
                                @if ($errors->has('admin_email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('admin_email') }}</strong>
                                    </span>
                                @endif


                        </div>





                        <div class="form-group row">


                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                        </div>




                        <div class="form-group row mb-0">
                                <button type="submit" class="btn btn-block">
                                    {{ __('Login') }}
                                </button>
                        </div>




                    </form>






                  </div>
      						</div>
      					</div>
      				</div>
      			</div>






      		</div>
      	</div>
      </div>







			<script src="js/jquery.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/panelmenu.js"></script>
			<script src="js/slick.min.js"></script>
			<script src="js/lazyload.min.js"></script>
			<script src="js/main.js"></script>
			<!-- form validation and sending to mail -->
			<script src="js/jquery.form.js"></script>
			<script src="js/jquery.validate.min.js"></script>
			<script src="js/jquery.form-init.js"></script>
			</body>
			</html>
