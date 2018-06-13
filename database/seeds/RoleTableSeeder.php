<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_official  =   new \App\Role();
        $role_official->name    =   'official';
        $role_official->description =   'Official User';
        $role_official->save();
	
	    $role_official  =   new \App\Role();
	    $role_official->name    =   'admin';
	    $role_official->description =   'Administrator';
	    $role_official->save();
	
	    $role_official  =   new \App\Role();
	    $role_official->name    =   'citizen';
	    $role_official->description =   'Citizen User';
	    $role_official->save();
    }
}
