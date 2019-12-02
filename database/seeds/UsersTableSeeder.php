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

		User::create([
			'username' => 'Manoplas23',
			'firstname' => 'Manuel',
			'lastname' => 'Maciel',
			'email' => 'manuel.maciel.ortiz@gmail.com',
			'phone' => '8745982156',
			'image' => 'img/manu.jpg',
			'password' => bcrypt('Manuel_568923'),
			'admin' => false,
		]);
	}
}
