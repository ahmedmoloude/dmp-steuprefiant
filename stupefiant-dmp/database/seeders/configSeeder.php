<?php

namespace Database\Seeders;

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

        $jsonOne = File::get("database/data/configs/config-01.json");
        $jsonTwo = File::get("database/data/configs/config-02.json");
        $jsonThree = File::get("database/data/configs/config-03.json");
        $jsonFour = File::get("database/data/configs/config-04.json");
        $jsonFive = File::get("database/data/configs/config-05.json");
        $jsonSix = File::get("database/data/configs/config-06.json");
        $jsonSeven = File::get("database/data/configs/config-07.json");
        $jsonEight = File::get("database/data/configs/config-08.json");


        DB::table('configs')->insert(
            [
                [
                    'name' => "DEMANDE ANNUELLE BESOIN EN STUPEFIANTS", 
                    'config' => $jsonOne 
                ],
                [
                    'name' => "DECLARATION ANNUELLE DES EXPORTATION", 
                    'config' => $jsonTwo 
                ],
                [
                    'name' => "DECLARATION ANNUELLE DES IMPORTATIONS", 
                    'config' => $jsonThree 
                ],
                [
                    'name' => "CONSOMMATION DE STUPEFIANTS ANNEE AAAA", 
                    'config' => $jsonFour 
                ],
                [
                    'name' => "DECLARATION ANNUELLE – ANNULATION
                    AUTORISATIONS ANNULEES AU TITRE DE L’ANNEE AAAA
                    IMPORT/EXPORT : 
                    STUPEFIANTS/SUBSTANCES PSYCHOTROPES/PRECURSEURS CHIMIQUES", 
                    'config' => $jsonFive
                ],
                [
                    'name' => "ACHAT LOCAL DES PRECUSEURS CHIMIQUES ANNEE AAAA", 
                    'config' => $jsonSix
                ],
                [
                    'name' => "DEMANDE ANNUELLE BESOIN PRECURSEURS CHIMIQUES", 
                    'config' => $jsonSeven
                ]
            ]
          
        );

        
    }
}
