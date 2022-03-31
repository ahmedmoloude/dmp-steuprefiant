<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'client_id' => 'required',
            'year' => 'required',
            'config_and_data' => 'required|array',
        ]);

        if($validator->fails()) {
            return response()->json("Une donnée transmise n\'est pas conforme.", 400);
        }

        $config_and_data = collect($request->config_and_data)->groupBy('label');
        
        foreach ($config_and_data as $key => $item) {
            $array_data = $config_and_data[$key]->pluck('data');
            $array_config = $config_and_data[$key]->pluck('config');
            
            $demande = Demande::create([
                "name" => $request->name,
                "client_id" => $request->client_id,
                "year" => $request->year,
                "nature_de_element" => $key,
                "data" => $array_data,
                "config" => $array_config
            ]);

        }
        return  response()->json("created" , 201) ;


        // try{
        // } catch(\Exception $e){
        
        //     return  response()->json("Bad request !", 400);
        // }

        return response($demande, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function show(Demande $demande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function edit(Demande $demande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demande $demande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demande $demande)
    {
        //
    }
}
