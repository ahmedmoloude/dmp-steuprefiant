<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\TableData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class DemandeController extends Controller
{   
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
            'data' => 'required',
            'tables' => 'required|array',
        ]);

        if($validator->fails()) {
            return response()->json("Une donnée transmise n\'est pas conforme.", 400);
        }

        DB::beginTransaction();
        try{
            $demande = Demande::create([
                "name" => $request->name,
                "client_id" => $request->client_id,
                "year" => $request->year,
                "data" => json_encode($request->data)
            ]);

            $tables = $request->tables;
            foreach($tables as $t){
                TableData::create([
                    "config" => json_encode($t['config']),
                    "data" => json_encode($t['data']),
                    "on_depend_id" => $t['on_depend_id'],
                    "demande_id" => $demande->id,
                ]);
            }
        } catch(\Exception $e){
            //dd($e->getMessage());
            DB::rollback();
            return response()->json("Bad request !", 400);
        }
        DB::commit();
        
        return response($demande, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        try{
            $demande = Demande::where('id' , $id)->with('tables')->first();
            if(!isset($demande)){
                return response()->json("Not found !", 404);
            }
            return response($demande);  
        }catch(\Exception $e){
            return response()->json("Bad request !", 400);
        }
    } 
    

    /* List demandes by client */
    public function getDemandeByClientId(Request $request)
    {   
        try{
            $client_id = $request->query('id');
            $demande = Demande::where("client_id" , $client_id)->with('tables')->get();
            return response($demande);

        } catch(\Exception $e){
            return response()->json("Bad request !", 400);
        }
    }

    /* Upload file */
    public function uploadImage(Request $request)
    {
        $image = $request->file('file');
        try {
            $fname = $image->getClientOriginalName();
            $image->move(storage_path("/app/public/cdn/images"), $fname);
            return response(['file_name' => "storage/cdn/images/".$fname], 201);
        } catch (Exception $ex) {
            return response(['message' => "Images::noUpploaded " . $ex->getMessage()], 500);
        }
    }
}
