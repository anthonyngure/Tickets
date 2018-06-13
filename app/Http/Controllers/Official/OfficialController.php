<?php
	
	namespace App\Http\Controllers\Official;
	
	use Illuminate\Http\Request;
	use App\Http\Controllers\Controller;
	
	class OfficialController extends Controller
	{
		public function __construct()
		{
			$this->middleware('auth');
		}
		
		public function official(Request $request)
		{
			return view('home')->with('roles', $request->user()->roles);
		}
	}
