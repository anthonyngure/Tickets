<?php
	
	namespace App\Http\Controllers\Citizen;
	
	use Illuminate\Http\Request;
	use App\Http\Controllers\Controller;
	
	class CitizenController extends Controller
	{
		public function __construct()
		{
			$this->middleware('auth');
		}
		
		public function index(Request $request)
		{
			return view('home')->with('roles', $request->user()->roles);
		}
	}
