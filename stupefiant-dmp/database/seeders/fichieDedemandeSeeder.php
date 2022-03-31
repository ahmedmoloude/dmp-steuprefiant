<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use File;
class fichieDedemandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/nature_de_element/config-01.json");
          

        DB::table('fichie_de_demandes')->insert(
            [
                'name' => "demande annuelle prevesion besoin psychotropes", 
                'nature_de_element' => $json,
                'year' => "increment",
            ],
        );
    
    }
}
