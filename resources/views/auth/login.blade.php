<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('authen/css/style.css')}}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="d-flex">
		      		<div class="w-100">
		      			<h3 class="mb-4">Login</h3>
		      		</div>
							<div class="w-100">
								<p class="social-media d-flex justify-content-end">
									<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-address-card"></span></a>
									<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-user-circle"></span></a>
								</p>
							</div>
		      		</div>
						<form method="POST" action="{{ route('login') }}">
        					@csrf
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input class="form-control rounded-left" placeholder="Username" id="username" type="username" name="username" :value="old('username')" required autofocus autocomplete="username">
		      		</div>
	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	              <input class="form-control rounded-left" placeholder="Password" id="password" type="password" name="password" :value="old('password')" required autofocus autocomplete="password">
	            </div>
	            <div class="form-group d-flex align-items-center">
	            	<div class="w-100">
	            		<label class="checkbox-wrap checkbox-primary mb-0">Save Password
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-100 d-flex justify-content-end">
		            	<button type="submit" class="btn btn-primary rounded submit" herf="{{ route ('login')}}">Login</button>
	            	</div>
	            </div>
	            <div class="form-group mt-4">
								<div class="w-100 text-center">
									<p class="mb-1">Don't have an account? 
										<a href="{{ route('register') }}" class="txt2 bo1">Sign Up Now</a></p>
									<p><a href="{{ route('password.request') }}" class="txt2 bo1 m-1-5">Forgot Password</a></p>
								</div>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('authen/js/jquery.min.js')}}"></script>
  <script src="{{ asset('authen/js/popper.js')}}"></script>
  <script src="{{ asset('authen/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('authen/js/main.js')}}"></script>

	</body>
</html>

