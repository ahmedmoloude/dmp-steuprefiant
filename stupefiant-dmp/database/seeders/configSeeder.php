<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use File;

class configSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $json = File::get("database/data/configs/config-04.json");
        // $jsonTwo = File::get("database/data/configs/config-15-02.json");

          

        DB::table('configs')->insert(
            [
                [
                    'name' => "config foure", 
                    'config' => $json 
                ],
            ]
          
        );

        
    }
}
