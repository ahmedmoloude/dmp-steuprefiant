<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use File;
class ficheDedemandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonDemo = File::get("database/data/fiche_de_demandes/config-05.json");
        // $jsonTwo = File::get("database/data/nature_de_element/config-02.json");
        // $jsonThree = File::get("database/data/nature_de_element/config-03.json");
        // $jsonFour = File::get("database/data/nature_de_element/config-04.json");
        // $jsonFive = File::get("database/data/nature_de_element/config-05.json");
        // $jsonSix = File::get("database/data/nature_de_element/config-06.json");
        // $jsonSeven = File::get("database/data/nature_de_element/config-07.json");
        // $jsonEight = File::get("database/data/nature_de_element/config-08.json");

        DB::table('fiche_de_demandes')->insert(
            [
                [
                    'name' => "DEMANDE ANNUELLE BESOIN EN STUPEFIANTS (Demo)", 
                    'config' => $jsonDemo,
                ],
                // [
                //     'name' => "DECLARATION ANNUELLE DES EXPORTATION", 
                //     'nature_de_element' => $jsonTwo,
                //     'year' => "decrement",
                // ],
                // [
                //     'name' => "DECLARATION ANNUELLE DES IMPORTATIONS", 
                //     'nature_de_element' => $jsonThree,
                //     'year' => "decrement",
                // ],
                // [
                //     'name' => "CONSOMMATION DE STUPEFIANTS ANNEE AAAA", 
                //     'nature_de_element' => $jsonFour,
                //     'year' => "decrement",
                // ],
                // [
                //     'name' => "DECLARATION ANNUELLE – ANNULATION
                //     AUTORISATIONS ANNULEES AU TITRE DE L’ANNEE AAAA
                //     IMPORT/EXPORT : 
                //     STUPEFIANTS/SUBSTANCES PSYCHOTROPES/PRECURSEURS CHIMIQUES", 
                //     'nature_de_element' => $jsonFour,
                //     'year' => "decrement",
                // ],
                // [
                //     'name' => "ACHAT LOCAL DES PRECUSEURS CHIMIQUES ANNEE AAAA", 
                //     'nature_de_element' => $jsonSix,
                //     'year' => "decrement",
                // ],
                // [
                //     'name' => "DEMANDE ANNUELLE BESOIN PRECURSEURS CHIMIQUES", 
                //     'nature_de_element' => $jsonSeven,
                //     'year' => "increment",
                // ]
            ]
        );
    
    }
}
