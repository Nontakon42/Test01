<!doctype html>
<html lang="en">
  <head>
  	<title>Register</title>
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
		      			<h3 class="mb-4">Register</h3>
		      		</div>
							<div class="w-100">
								<p class="social-media d-flex justify-content-end">
									<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-address-card"></span></a>
									<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-user-circle "></span></a>
								</p>
							</div>
		      		</div>
				 <form method="POST" action="{{ route('register') }}" class="signup-form">
                            @csrf
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-address-book "></span></div>
		      			<input class="form-control" id="username" placeholder="Username" type="text" name="username" :value="old('username')" required autofocus autocomplete="username">

		      		</div>
					  <div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user-circle-o"></span></div>
		      			<input class="form-control" id="name" type="text" placeholder="Name" name="name" :value="old('name')" required autofocus autocomplete="name">
		      		</div>
	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-envelope-open "></span></div>
					<input class="form-control" id="email" placeholder="Email" type="email" name="email" :value="old('email')" required autocomplete="username">
				  </div>
				<div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-phone"></span></div>
					<input class="form-control" id="phone" placeholder="Phone" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone">
	            </div>
				<div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-unlock-alt "></span></div>
					<input class="form-control" id="password" placeholder="Password"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
					
				<div class="form-group mt-3">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-unlock-alt"></span></div>
					<input class="form-control" id="password_confirmation" placeholder="Password Comfirm"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password">
	            </div>
	            <div class="form-group d-flex align-items-center">
	            	<div class="w-100">
	            		<label class="checkbox-wrap checkbox-primary mb-0">Save Password
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-100 d-flex justify-content-end">
		            	<button type="submit" class="btn btn-primary rounded submit">Sign in</button>
	            	</div>
	            </div>
	            <div class="form-group mt-4">
								<div class="w-100 text-center">
									<p class="mb-1">Already Have Account?
										<a class="txt2 bo1" href="{{ route('login') }}">Login</a></p>
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
