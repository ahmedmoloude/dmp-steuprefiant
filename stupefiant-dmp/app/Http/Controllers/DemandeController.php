<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\TableData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Log;
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

            $tables = collect($request->tables)->map(function ($item, $key) use($demande) {
                return [
                    "config" => json_encode($item['config']),
                    "data" => json_encode($item['data']),
                    "on_depend_id" => $item['on_depend_id'],
                    "demande_id" => $demande->id,
                ];
            })->toArray();
            TableData::insert($tables);
        } catch(\Exception $e){
            Log::error('create demande error : ' .$e->getMessage());
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
            if(!$demande){
                return response()->json("Not found !", 404);
            }
            return response($demande);  
        }catch(\Exception $e){
            Log::error('get single demande error : '.$e->getMessage());
            return response()->json("Bad request !", 400);
        }
    } 
    

    /* List demandes by client */
    public function getDemandeByClientId(Request $request)
    { 
      try{
            $client_id = $request->id;
            $demande = Demande::where("client_id" , $client_id)->with('tables')->get();
            return response($demande);

        } catch(\Exception $e){
            Log::error('get list demande by client id error : '.$e->getMessage());
            return response()->json("Bad request !", 400);
        }
    }

    /* Upload file */
    public function uploadImage(Request $request)
    {   
        $allowdExtentions = ['jpg', 'png', 'jpeg' , "pdf", "doc", "xls"];
        $file = $request->file('file');

        if ($file && in_array($file->getClientOriginalExtension(), $allowdExtentions)) {
            try {
                $fname = $file->getClientOriginalName();
                $file->move(storage_path("/app/public/cdn/images"), $fname);
                return response(['file_name' => "storage/cdn/images/".$fname], 201);
            } catch (\Exception $e) {
                Log::error('file not uploaded error : '.$e->getMessage());
                return response(['message' => "File not uploaded !" . $e->getMessage()], 400);
            }
        }else{
            return response()->json("Invalid format file !", 400);
        }
    }
}
