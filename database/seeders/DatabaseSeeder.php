<?php

namespace Database\Seeders;

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
            RoleSeeder::class,
            LeagueSeeder::class,
            UserSeeder::class,
            PostSeeder::class,
            WorkshopSeeder::class,
            AssignmentSeeder::class,
            
        ]);
    }
}
