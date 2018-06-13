<?php
	
	namespace App\Http\Controllers\Guest;
	
	use Illuminate\Http\Request;
	use App\Http\Controllers\Controller;
	use Illuminate\Support\Facades\Auth;
	
	class GuestController extends Controller
	{
		private $dir;
		
		public function __construct()
		{
			$this->dir = 'guest.';
		}
		
		public function index()
		{
			if (Auth::user()) {
				return redirect()->back();
			}
			return view($this->dir . 'index');
		}
	}
