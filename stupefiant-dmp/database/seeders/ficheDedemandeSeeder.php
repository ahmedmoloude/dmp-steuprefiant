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
        $jsonOne = File::get("database/data/fiche_de_demandes/config-01.json");
        $jsonTwo = File::get("database/data/fiche_de_demandes/config-02.json");
        $jsonThree = File::get("database/data/fiche_de_demandes/config-03.json");
        $jsonFour = File::get("database/data/fiche_de_demandes/config-04.json");
        $jsonFive = File::get("database/data/fiche_de_demandes/config-05.json");
        $jsonSix = File::get("database/data/fiche_de_demandes/config-06.json");
        $jsonSeven = File::get("database/data/fiche_de_demandes/config-07.json");
        $jsonEight = File::get("database/data/fiche_de_demandes/config-08.json");
        $jsonNine = File::get("database/data/fiche_de_demandes/config-09.json");
        $jsonTen = File::get("database/data/fiche_de_demandes/config-10.json");
        $jsonEleven = File::get("database/data/fiche_de_demandes/config-11.json");
        $jsonTwelve = File::get("database/data/fiche_de_demandes/config-12.json");
        $jsonThirteen = File::get("database/data/fiche_de_demandes/config-13.json");
        $jsonFourteen = File::get("database/data/fiche_de_demandes/config-14.json");
        $jsonFifteen = File::get("database/data/fiche_de_demandes/config-15.json");
        $jsonSixteen = File::get("database/data/fiche_de_demandes/config-16.json");

        DB::table('fiche_de_demandes')->insert(
            [
                [
                    'name' => "DEMANDE ANNUELLE BESOIN PRECURSEURS CHIMIQUES", 
                    'config' => $jsonOne,
                ],
                [
                    'name' => "DEMANDE ANNUELLE REVISION BESOIN E PSYCHOTROPES", 
                    'config' => $jsonTwo,
                ],
                [
                    'name' => "UTILISATION DE MATIERE PREMIERE POUR FABRICATION OU DE SUBSTANCE DE REFERENCE", 
                    'config' => $jsonThree,
                ],
                [
                    'name' => "DECLARATION DE RECEPTION OU D’EXPORTATION DE SUBSTANCES PLACEES SOUS CONTRÖLE", 
                    'config' => $jsonFour,
                ],
                [
                    'name' => "DEMANDE D’AUTORISATION D’IMPORTATION", 
                    'config' => $jsonFive,
                ],
                [
                    'name' => "DEMANDE D’AUTORISATION D’EXPORTATION", 
                    'config' => $jsonSix,
                ],
                [
                    'name' => "DEMANDE D’ANNULATION D’UNE AUTORISATION D’IMPORTATION/ EXPORTATION", 
                    'config' => $jsonSeven,
                ],
                [
                    'name' => "DECLARATION ANNUELLE – ANNULATION AUTORISATIONS ANNULEES AU TITRE DE L’ANNEE AAAA", 
                    'config' => $jsonEight,
                ],
                [
                    'name' => "CONSOMMATION DE STUPEFIANTS ANNEE AAAA", 
                    'config' => $jsonNine,
                ],
                [
                    'name' => "DEMANDE DE SUPPLEMENT AUX EVALUATIONS OU AUX PREVISIONS ANNUELLES DES BESOINS ", 
                    'config' => $jsonTen,
                ],
                [
                    'name' => "ACHAT LOCAL DES PRECUSEURS CHIMIQUES ANNEE AAAA", 
                    'config' => $jsonEleven,
                ],
                [
                    'name' => "DECLARATION ANNUELLE DES EXPORTATION", 
                    'config' => $jsonTwelve,
                ],
                [
                    'name' => "DECLARATION DE STOCK DE PRODUIT FINIS", 
                    'config' => $jsonThirteen,
                ],
                [
                    'name' => "DECLARATION ANNUELLE DES IMPORTATIONS", 
                    'config' => $jsonFourteen,
                ],
                [
                    'name' => "DECLARATION DE STOCK DE MATIERES PREMIERES", 
                    'config' => $jsonFifteen,
                ],
                [
                    'name' => "DEMANDE ANNUELLE BESOIN EN STUPEFIANTS", 
                    'config' => $jsonSixteen,
                ],
            ]
        );
    
    }
}
