@extends('layouts.main')
@section('content')
	  <div class="container-fluid page-body-wrapper">
			<div class="main-panel">
				  <div class="content-wrapper">
						
						<div class="row">
							  <div class="col-md-12 grid-margin stretch-card">
									<div class="card">
										  <div class="card-header">
												<p class="text-white">{{Auth::user()->name}}</p>
										  </div>
										  <div class="card-body">
												@foreach($roles as $role)
													  <h6>{{$role->name}}</h6>
													  <p>{{$role->description}}</p>
												@endforeach
										  </div>
										  <a style="padding: 1em; color: blue; text-decoration: underline" href="{{ url('logout') }}"
											 >
												{{ __('Logout') }}
										  </a>
									</div>
							  </div>
						</div>
				  </div>
				  <!-- content-wrapper ends -->
				  <!-- partial:partials/_footer.html -->
			<!--@include('includes.footer')-->
				  <!-- partial -->
			</div>
			<!-- main-panel ends -->
	  </div>
	  <!-- page-body-wrapper ends -->
@endsection