<?php
	
	namespace App\Http\Controllers\Auth;
	
	use App\Http\Controllers\Controller;
	use App\Mail\Welcome;
	use App\Role;
	use App\User;
	use Illuminate\Foundation\Auth\AuthenticatesUsers;
	use Illuminate\Support\Facades\Auth;
	use Illuminate\Support\Facades\Hash;
	use Illuminate\Support\Facades\Mail;
	use Laravel\Socialite\Facades\Socialite;
	
	class LoginController extends Controller
	{
		
		
		use AuthenticatesUsers;
		
		/**
		 * Where to redirect users after login.
		 *
		 * @var string
		 */
		protected $redirectTo = '/home';
		
		/**
		 * Create a new controller instance.
		 *
		 * @return void
		 */
		public function __construct()
		{
			$this->middleware('guest')->except('logout');
		}
		
		
		public function redirectToProvider($service)
		{
			return Socialite::driver($service)->redirect();
		}
		
		
		public function handleProviderCallback($service)
		{
			if ($service == 'google') {
				$user = Socialite::driver('google')->stateless()->user();
			} else {
				$user = Socialite::driver($service)->user();
			}
			
			$returnedUser = User::where('email', $user->getEmail())->first();
			if ($returnedUser != null) {
				//Login user
				Auth::login($returnedUser);
				return redirect()->to('/home');
			}
			$createdUser = $this->signUp($user);
			Auth::login($createdUser);
			return redirect()->to('/home');
		}
		
		public function signUp($data)
		{
			
			$user = User::create([
				'name' => $data->getName(),
				'email' => $data->getEmail(),
				'password' => Hash::make('SS3##SS3%&8()'),
			]);
			/*
			 * Attach User to Role
			 */
			$this
				->attachRole($user);
			/*
			 * Send Welcome Email to Citizen
			 */
			$this
				->sendWelcomeEmail($user);
			return $user;
		}
		
		public function attachRole($user)
		{
			$user
				->roles()
				->attach(Role::where('name', 'citizen')->first());
		}
		
		public function sendWelcomeEmail($user)
		{
			Mail::to($user->email)
				->send(new Welcome($user));
		}
	}
