<?php
	
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	
	class HomeController extends Controller
	{
		
		public function __construct()
		{
			$this->middleware('auth');
		}
		
		public function index(Request $request)
		{
			if ($request->user()->hasRole('citizen')) {
				return redirect()->route('citizen');
			}
			if ($request->user()->hasRole('official')) {
				return redirect()->route('official');
			}
			if ($request->user()->hasRole('admin')) {
				return redirect()->route('admin');
			}
			return abort(403);
		}
	}
