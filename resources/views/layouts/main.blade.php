<!DOCTYPE html>
<html lang="en">

<head>
	  <!-- Required meta tags -->
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <title>{{config('app.name')}}</title>
	  <!-- plugins:css -->
	  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
	  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
	  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
	  <!-- endinject -->
	  <!-- plugin css for this page -->
	  <!-- End plugin css for this page -->
	  <!-- inject:css -->
	  <link rel="stylesheet" href="css/style.css">
	  <!-- endinject -->
	  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
<div class="container-scroller">
	  <!-- partial:partials/_horizontal-navbar.html -->
	  <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
			<div class="container d-flex flex-row">
				  <div class="text-center navbar-brand-wrapper d-flex align-items-top">
						<a class="navbar-brand brand-logo" href="{{url('/')}}">
							  <img src="http://www.nyandarua.go.ke/wp-content/uploads/2015/01/Main-County-logo.png" alt="logo"/></a>
						<a class="navbar-brand brand-logo-mini" href="{{url('/')}}"><img src="http://www.nyandarua.go.ke/wp-content/uploads/2015/01/Main-County-logo.png" alt="logo"/></a>
				  </div>
				  <div class="navbar-menu-wrapper d-flex align-items-center">
						<form class="search-field ml-auto" action="#">
							  <div class="form-group mb-0">
									<div class="input-group">
										  <div class="input-group-prepend">
												<span class="input-group-text"><i class="mdi mdi-magnify"></i></span>
										  </div>
										  <input type="text" class="form-control">
									</div>
							  </div>
						</form>
						<ul class="navbar-nav navbar-nav-right mr-0">
							  <li class="nav-item dropdown ml-4">
									<a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
										  <i class="mdi mdi-bell-outline"></i>
										  <span class="count bg-warning">4</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
										  <a class="dropdown-item py-3">
												<p class="mb-0 font-weight-medium float-left">You have 4 new notifications
												</p>
												<span class="badge badge-pill badge-inverse-info float-right">View all</span>
										  </a>
										  <div class="dropdown-divider"></div>
										  <a class="dropdown-item preview-item">
												<div class="preview-thumbnail">
													  <div class="preview-icon bg-inverse-success">
															<i class="mdi mdi-alert-circle-outline mx-0"></i>
													  </div>
												</div>
												<div class="preview-item-content">
													  <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
													  <p class="font-weight-light small-text mb-0">
															Just now
													  </p>
												</div>
										  </a>
										  <div class="dropdown-divider"></div>
										  <a class="dropdown-item preview-item">
												<div class="preview-thumbnail">
													  <div class="preview-icon bg-inverse-warning">
															<i class="mdi mdi-comment-text-outline mx-0"></i>
													  </div>
												</div>
												<div class="preview-item-content">
													  <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
													  <p class="font-weight-light small-text mb-0">
															Private message
													  </p>
												</div>
										  </a>
										  <div class="dropdown-divider"></div>
										  <a class="dropdown-item preview-item">
												<div class="preview-thumbnail">
													  <div class="preview-icon bg-inverse-info">
															<i class="mdi mdi-email-outline mx-0"></i>
													  </div>
												</div>
												<div class="preview-item-content">
													  <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
													  <p class="font-weight-light small-text mb-0">
															2 days ago
													  </p>
												</div>
										  </a>
									</div>
							  </li>
							  <li class="nav-item dropdown d-none d-xl-inline-block">
									<a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
										  <img class="img-xs rounded-circle" src="images/faces/face1.jpg" alt="Profile image">
									</a>
									<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
										  <a class="dropdown-item p-0">
												<div class="d-flex border-bottom">
													  <div class="py-3 px-4 d-flex align-items-center justify-content-center"><i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i></div>
													  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right"><i class="mdi mdi-account-outline mr-0 text-gray"></i></div>
													  <div class="py-3 px-4 d-flex align-items-center justify-content-center"><i class="mdi mdi-alarm-check mr-0 text-gray"></i></div>
												</div>
										  </a>
										  
										  <a class="dropdown-item" href="{{ url('logout') }}">
												{{ __('Logout') }}
										  </a>
									</div>
							  </li>
						</ul>
						<button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
							  <span class="mdi mdi-menu"></span>
						</button>
				  </div>
			</div>
			<div class="nav-bottom">
				  <div class="container">
						<ul class="nav page-navigation">
							  <li class="nav-item">
									<a href="{{url('/')}}" class="nav-link"><i class="link-icon mdi mdi-television"></i><span class="menu-title">DASHBOARD</span></a>
							  </li>
						</ul>
				  </div>
			</div>
	  </nav>
	  
	 @yield('content')
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('vendors/js/vendor.bundle.addons.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset('js/template.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('js/dashboard.js')}}"></script>
<!-- End custom js for this page-->
</body>

</html>
