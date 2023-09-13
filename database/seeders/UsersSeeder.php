<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "user",
            'email' => 'user@user.com',
            'password' => Hash::make('password'),
        ])->assignRole('user');
        User::create([
            'name' => "admin",
            'email' => 'admin@.com',
            'password' => Hash::make('password'),
        ])->assignRole('admin');
    }
}
