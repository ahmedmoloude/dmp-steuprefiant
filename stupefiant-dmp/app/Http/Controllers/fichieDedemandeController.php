<?php

namespace App\Http\Controllers;

use App\Models\fichieDedemande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class fichieDedemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(fichieDedemande::get());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fichieDedemande  $fichieDedemande
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return response(fichieDedemande::find($id));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fichieDedemande  $fichieDedemande
     * @return \Illuminate\Http\Response
     */
    public function edit(fichieDedemande $fichieDedemande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fichieDedemande  $fichieDedemande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fichieDedemande $fichieDedemande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fichieDedemande  $fichieDedemande
     * @return \Illuminate\Http\Response
     */
    public function destroy(fichieDedemande $fichieDedemande)
    {
        //
    }
}
