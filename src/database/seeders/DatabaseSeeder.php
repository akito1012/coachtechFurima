<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ConditionsTableSeeder::class,
            CategoriesTableSeeder::class,
            UsersTableSeeder::class,
            ProfilesTableSeeder::class,
            ItemsTableSeeder::class,
            CategoryItemTableSeeder::class
        ]);
    }
}
