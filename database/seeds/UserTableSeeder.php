<?php
	
	use Illuminate\Database\Seeder;
	
	class UserTableSeeder extends Seeder
	{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
			$role_official = \App\Role::where('name', 'official')->first();
			$role_admin = \App\Role::where('name', 'admin')->first();
			$role_citizen = \App\Role::where('name', 'citizen')->first();
			/*
			 * Official Seed
			 */
			$official = new \App\User();
			$official->name = 'Official';
			$official->email = 'official@nyandaruacounty.gov';
			$official->password = \Illuminate\Support\Facades\Hash::make('123456');
			$official->save();
			$official->roles()->attach($role_official);
			/*
			 * Admin Seed
			 */
			$admin = new \App\User();
			$admin->name = 'admin';
			$admin->email = 'admin@nyandaruacounty.gov';
			$admin->password = \Illuminate\Support\Facades\Hash::make('123456');
			$admin->save();
			$admin->roles()->attach($role_admin);
			/*
			 * Citizen Seed
			 */
			$citizen = new \App\User();
			$citizen->name = 'citizen';
			$citizen->email = 'citizen@nyandaruacounty.gov';
			$citizen->password = \Illuminate\Support\Facades\Hash::make('123456');
			$citizen->save();
			$citizen->roles()->attach($role_citizen);
			
		}
	}
