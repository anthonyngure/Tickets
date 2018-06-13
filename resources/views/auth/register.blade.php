<!DOCTYPE html>
<html lang="en">

<head>
	  <!-- Required meta tags -->
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <title>LibertyUI Premium Bootstrap Admin Dashboard Template</title>
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
			<div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
				  <div class="row w-100 mx-auto">
						<div class="col-lg-4 mx-auto">
							  <h2 class="text-center mb-4">Register</h2>
							  <div class="auto-form-wrapper">
									<form method="POST" action="{{ route('register') }}">
										  @csrf
										  <div class="form-group">
												<div class="input-group">
													  <input id="name" type="text"
															 class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
															 placeholder="Name"
															 name="name" value="{{ old('name') }}" required autofocus>
													  
													  
													  <div class="input-group-append">
															<span class="input-group-text"><i
																		  class="mdi mdi-check-circle-outline"></i></span>
													  </div>
													  @if ($errors->has('name'))
															<span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
													  @endif
												</div>
										  </div>
										  <div class="form-group">
												<div class="input-group">
													  <input id="email" type="text"
															 class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
															 placeholder="Email Address"
															 name="email" value="{{ old('email') }}" required autofocus>
													  
													  
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
												<div class="input-group">
													  <input id="password" type="password"
															 class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Enter Password"
															 name="password" required>
													  
													  
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
										  <div class="form-group">
												<div class="input-group">
													  <input id="password-confirm" type="password" class="form-control"
															 name="password_confirmation" required placeholder="Confirm Password">
													  
													  
													  <div class="input-group-append">
															<span class="input-group-text"><i
																		  class="mdi mdi-check-circle-outline"></i></span>
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
										  <div class="form-group row mb-0">
												
												<button type="submit" class="btn btn-primary btn-block">
													  {{ __('Register') }}
												</button>
										  
										  </div>
										  <div class="text-block text-center my-3">
												<span class="text-small font-weight-semibold">Already have and account ?</span>
												<a href="{{route('login')}}" class="text-black text-small">Login</a>
										  </div>
									</form>
							  </div>
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
