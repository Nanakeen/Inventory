<!DOCTYPE html>
<html lang="en">

<head>

	<title>GAF-INVENTORY</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="{{ asset('assets/images/logo-icon.png ') }}" type="image/x-icon">
	<!-- vendorlink rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon"> css -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<!-- [ signin-img ] start -->
<div class="auth-wrapper align-items-stretch aut-bg-img">
	<div class="flex-grow-1">
		<div class="h-100 d-md-flex align-items-center auth-side-img">
			<div class="col-sm-10 auth-content w-auto">
				<img src="{{ asset('assets/images/auth/newlogo.png') }}" alt="LOGO" class="img-fluid" width="300px">
				<h1 class="text-white my-4">Welcome Back!</h1>
				<h4 class="text-white font-weight-normal">Signin to your account Dashboard.<br/>Its good to be here.</h4>
			</div>
		</div>
		<div class="auth-side-form">
			<div class=" auth-content">
				 @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
                <form method="POST" action="{{ route('login') }}">
                    @csrf
				<img src="{{ asset('assets/images/auth/auth-logo-dark.png') }}" alt="" class="img-fluid mb-4 d-block d-xl-none d-lg-none">
				<h3 class="mb-4 f-w-400">Signin</h3>
				<div class="form-group mb-3">
					<label class="floating-label" for="Email">Email address</label>
					<input type="text" class="form-control" id="email" type="email" name="email">
				</div>
				<div class="form-group mb-4">
					<label class="floating-label" for="Password">Password</label>
					<input type="password" class="form-control" id="password"  name="password" required autocomplete="current-password">
				</div>
				<div class="custom-control custom-checkbox text-left mb-4 mt-2">
					<input type="checkbox" class="custom-control-input"  id="remember_me" name="remember">
					<label class="custom-control-label" for="remember_me">Remember me.</label>
				</div>
				<button class="btn btn-block btn-primary mb-4">Login</button>
            </form>

				<div class="text-center">
					<div class="saprator my-4"><span>OR</span></div>
					<p class="mb-2 mt-4 text-muted">Forgot password? <a href="{{ route('password.request') }}" class="f-w-400">Reset</a></p>
					<p class="mb-0 text-muted">Don’t have an account? <a href="{{ route('register') }}" class="f-w-400">Signup</a></p>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- [ signin-img ] end -->

<!-- Required Js -->
<script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/ripple.js') }}"></script>
<script src="{{ asset('assets/js/pcoded.min.js') }}"></script>

</body>

</html>
