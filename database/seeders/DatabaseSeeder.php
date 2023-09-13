<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesSeeder::class,
            UsersSeeder::class,
        ]);
        \App\Models\Branch::factory(5)->create();
        \App\Models\Categorie::factory(5)->create();
        \App\Models\SubCategorie::factory(30)->create();
        \App\Models\Product::factory(60)->create();
        \App\Models\Adresse::factory(5)->create();
    }
}
