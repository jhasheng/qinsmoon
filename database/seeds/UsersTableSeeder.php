<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->truncate();

		$admin = new \App\Models\User();
		$admin->email = "admin@admin.com";
		$admin->password = "admin";
		$admin->name = "admin";
		$admin->save();

		$editor = new \App\Models\User();
		$editor->email = "editor@editor.com";
		$editor->password = "editor";
		$editor->name = "editor";
		$editor->save();

		$user = new \App\Models\User();
		$user->email = "user@user.com";
		$user->password = "user";
		$user->name = "user";
		$user->save();
	}

}