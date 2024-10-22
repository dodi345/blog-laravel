<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $users = [
        [
            'name' => 'Dodi Sopandi',
            'username' => 'dodi-sopandi',
            'email' => 'dodisopandi89@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('dodi123'),
            'remember_token' => Str::random(10),
        ],
    ];

    foreach ($users as $user) {
        User::insert([
            'name' => $user['name'],
            'username' => $user['username'],
            'email' => $user['email'],
            'email_verified_at' => $user['email_verified_at'],
            'password' => $user['password'],
            'remember_token' => $user['remember_token'],
        ]);
    }

    User::factory(5)->create();
}

}
