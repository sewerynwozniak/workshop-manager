<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'id' =>1,
                'title' => 'Title 1', 
                'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus consectetur molestias fuga doloribus sed molestiae a sapiente obcaecati aut, labore illum dolorum placeat debitis dolor, voluptatum ratione ad natus minus!',    
            ],
            [
                'id' =>2,
                'title' => 'Title 2', 
                'text' => 'Lorem 2 ipsum dolor sit amet consectetur, adipisicing elit. Repellendus consectetur molestias fuga doloribus sed molestiae a sapiente obcaecati aut, labore illum dolorum placeat debitis dolor, voluptatum ratione ad natus minus!',    
            ],
                ]
            );
            
    }
}
