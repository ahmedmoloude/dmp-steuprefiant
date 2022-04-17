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
        $jsonThreeFirst = File::get("database/data/configs/config-03-01.json");
        $jsonThreeSecond = File::get("database/data/configs/config-03-02.json");
        $jsonFourFirst = File::get("database/data/configs/config-04-01.json");
        $jsonFourSecond = File::get("database/data/configs/config-04-02.json");
        $jsonFive = File::get("database/data/configs/config-05.json");
        $jsonSix = File::get("database/data/configs/config-06.json");
        $jsonSeven = File::get("database/data/configs/config-07.json");
        $jsonEight = File::get("database/data/configs/config-08.json");
        $jsonNine = File::get("database/data/configs/config-09.json");
        $jsonTen = File::get("database/data/configs/config-10.json");
        $jsonEleven = File::get("database/data/configs/config-11.json");
        $jsonTwelve = File::get("database/data/configs/config-12.json");
        $jsonThirteen = File::get("database/data/configs/config-13.json");
        $jsonFourteen = File::get("database/data/configs/config-14.json");
        $jsonFifteenFirst = File::get("database/data/configs/config-15-01.json");
        $jsonFifteenSecond = File::get("database/data/configs/config-15-02.json");
        $jsonSixteen = File::get("database/data/configs/config-16.json");


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
                    'config' => $jsonThreeFirst 
                ],
                [
                    'name' => "DECLARATION ANNUELLE DES IMPORTATIONS", 
                    'config' => $jsonThreeSecond 
                ],
                [
                    'name' => "CONSOMMATION DE STUPEFIANTS ANNEE AAAA", 
                    'config' => $jsonFourFirst 
                ],
                [
                    'name' => "CONSOMMATION DE STUPEFIANTS ANNEE AAAA", 
                    'config' => $jsonFourSecond 
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
                ],
                [
                    'name' => "DEMANDE ANNUELLE BESOIN PRECURSEURS CHIMIQUES", 
                    'config' => $jsonEight
                ],
                [
                    'name' => "DEMANDE ANNUELLE BESOIN PRECURSEURS CHIMIQUES", 
                    'config' => $jsonNine
                ],
                [
                    'name' => "DEMANDE ANNUELLE BESOIN PRECURSEURS CHIMIQUES", 
                    'config' => $jsonTen
                ],
                [
                    'name' => "DEMANDE ANNUELLE BESOIN PRECURSEURS CHIMIQUES", 
                    'config' => $jsonEleven
                ],
                [
                    'name' => "DEMANDE ANNUELLE BESOIN PRECURSEURS CHIMIQUES", 
                    'config' => $jsonTwelve
                ],
                [
                    'name' => "DEMANDE ANNUELLE BESOIN PRECURSEURS CHIMIQUES", 
                    'config' => $jsonThirteen
                ],
                [
                    'name' => "DEMANDE ANNUELLE BESOIN PRECURSEURS CHIMIQUES", 
                    'config' => $jsonFourteen
                ],
                [
                    'name' => "DEMANDE ANNUELLE BESOIN PRECURSEURS CHIMIQUES", 
                    'config' => $jsonFifteenFirst
                ],
                [
                    'name' => "DEMANDE ANNUELLE BESOIN PRECURSEURS CHIMIQUES", 
                    'config' => $jsonFifteenSecond
                ],
                [
                    'name' => "DEMANDE ANNUELLE BESOIN PRECURSEURS CHIMIQUES", 
                    'config' => $jsonSixteen
                ]
            ]
          
        );

        
    }
}
