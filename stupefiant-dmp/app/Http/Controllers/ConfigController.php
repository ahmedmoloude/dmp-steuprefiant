<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Config::get());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function show(Config $config)
    {
        return response($config);
    }   

    // Unused !!!
    public function getConfigs(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ids' => 'required|array',
        ]);

        if($validator->fails()) {
            return response()->json("Une donnée transmise n\'est pas conforme.", Response::HTTP_BAD_REQUEST);
        }

        $configs = Config::whereIn("id", $request->ids)->get();
        return response($configs);
    }

}
