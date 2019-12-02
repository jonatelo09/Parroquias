<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		User::create([
			'username' => 'Jonatelo96',
			'firstname' => 'Jonatan',
			'lastname' => 'Arevalo',
			'email' => 'kuroko.arevalo@gmail.com',
			'phone' => '9983456795',
			'image' => 'img/jona.jpg',
			'password' => bcrypt('Jonatelo_568923'),
			'admin' => true,
		]);
	}
}
