<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workshops')->insert([
        [
            'id' =>1,
            'date' => '2022-12-06',         
            'time' => '8:0:0',         
            'place' => 'Kraków, ul Łakowa 10',         
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'xp'=>10         
        ],
        [
            'id' =>2,
            'date' => '2023-02-03',         
            'time' => '20:30:0',         
            'place' => 'Kraków, ul Łakowa 10',         
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',  
            'xp'=>10     
        ],
       
        
        ]
    );
        
     
    }
}
