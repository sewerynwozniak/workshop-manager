<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assignments')->insert([
            [
                'id' =>1,                          
                'name' => 'Assignment 1',         
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'deadline' => '2023-03-06',    
                'xp'=>10         
            ],
            [
                'id' =>2,                          
                'name' => 'Assignment 2',         
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'deadline' => '2022-04-06',    
                'xp'=>10    
            ],
           
            
            ]
        );
    }
}
