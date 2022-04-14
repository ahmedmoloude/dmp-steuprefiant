<?php

namespace App\Http\Controllers;

use App\Models\FicheDemande;

class FicheDemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(FicheDemande::get());
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FicheDemande  $FicheDemande
     * @return \Illuminate\Http\Response
     */
    public function show(FicheDemande $ficheDemande)
    {
        return response($ficheDemande);
    }
}
