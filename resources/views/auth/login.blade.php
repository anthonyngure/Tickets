<!DOCTYPE html>
<html lang="en">

<head>
	  <!-- Required meta tags -->
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <title>{{config('app.name')}}te</title>
	  <!-- plugins:css -->
	  <link rel="stylesheet" href="{{asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
	  <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
	  <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.addons.css')}}">
	  <!-- endinject -->
	  <!-- plugin css for this page -->
	  <!-- End plugin css for this page -->
	  <!-- inject:css -->
	  <link rel="stylesheet" href="{{asset('css/style.css')}}">
	  <!-- endinject -->
	  <link rel="shortcut icon" href="{{asset('images/favicon.png')}}"/>
</head>

<body>
<div class="container-scroller">
	  <div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
				  <div class="row w-100 mx-auto">
						<div class="col-lg-4 mx-auto">
							  <div class="auto-form-wrapper">
									<form method="POST" action="{{ route('login') }}">
										  @csrf
										  <div class="form-group">
												<label class="label">Email</label>
												<div class="input-group">
													  <input id="email" type="email"
															 class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
															 name="email" value="{{ old('email') }}" required>
													  
													  <div class="input-group-append">
															<span class="input-group-text"><i
																		  class="mdi mdi-check-circle-outline"></i></span>
													  </div>
													  @if ($errors->has('email'))
															<span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
													  @endif
												</div>
										  
										  </div>
										  <div class="form-group">
												<label class="label">Password</label>
												<div class="input-group">
													  <div class="input-group">
															<input id="password" type="password"
																   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
																   name="password">
															
															<div class="input-group-append">
																  <span class="input-group-text"><i
																				class="mdi mdi-check-circle-outline"></i></span>
															</div>
															@if ($errors->has('password'))
																  <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
															@endif
													  </div>
												</div>
										  </div>
										  <div class="form-group">
												{!! Captcha::display() !!}
												@if ($errors->has('g-recaptcha-response'))
													  <p style="color: red">
															<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
													  </p>
												@endif
										  </div>
										  <div class="form-group">
												<button type="submit" class="btn btn-primary submit-btn btn-block">
													  Login
												</button>
										  </div>
										  <div class="form-group d-flex justify-content-between">
												<div class="form-check form-check-flat mt-0">
													  <label class="form-check-label">
															<input type="checkbox"
																   name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
													  </label>
												</div>
												<a class="text-small forgot-password text-black"
												   href="{{ route('password.request') }}">
													  {{ __('Forgot Your Password?') }}
												</a>
										  </div>
										  <div class="form-group">
												<a href="{{url('social-auth/google')}}" class="btn btn-block g-login"><img class="mr-3"
																						   src="{{asset('images/file-icons/icon-google.svg')}}"
																						   alt="">Log in with Google
												</a>
												
										  </div>
										  <div class="text-block text-center my-3">
												<span class="text-small font-weight-semibold">Not a member ?</span>
												<a href="{{route('register')}}" class="text-black text-small">Create new
													  account</a>
										  </div>
									</form>
							  </div>
							  <ul class="auth-footer">
									<li><a href="#">Conditions</a></li>
									<li><a href="#">Help</a></li>
									<li><a href="#">Terms</a></li>
							  </ul>
							  <p class="footer-text text-center">copyright © 2018 {{config('app.name')}}. All rights reserved.</p>
						</div>
				  </div>
			</div>
			<!-- content-wrapper ends -->
	  </div>
	  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('vendors/js/vendor.bundle.addons.js')}}"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="{{asset('js/template.js')}}"></script>
<!-- endinject -->
</body>

</html>
