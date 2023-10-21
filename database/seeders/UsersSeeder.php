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
            'first_name' => "user",
            'last_name' => "user",
            'email' => 'user@user.com',
            'password' => Hash::make('password'),
        ])->assignRole('user');
        User::create([
            'first_name' => "admin",
            'last_name' => "admin",
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ])->assignRole('admin');
    }
}
