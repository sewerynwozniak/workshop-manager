<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' =>1,
                'name' => 'Seweryn',   
                'role_id' =>1,
                'email'=> 'sewerynwozniak111@gmail.com',
                'password'=>Hash::make(1234)
            ],
            [
                'id' =>2,
                'name' => 'Maciej',   
                'role_id' =>2,
                'email'=> 'maciej111@gmail.com',
                'password'=>Hash::make(1234)
            ],
            ]
            );
    }
}
