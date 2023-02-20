<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$users =[
			[
            'name' => 'Md Shagor',
            'email' => 'srq001100@gmail.com',
            'password' => Hash::make(11111111),
			],
			[
            'name' => 'Test',
            'email' => 'test@gmail.com',
            'password' => Hash::make(11111111),
			]
		];
        User::insert($users);
    }
}
