<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Config;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $module = $request->input('module');
        $config = Config::where('module', $module)->get(['key', 'value'])->toArray();
        $newConfig = [];
        for($i=0; $i < count($config); $i++){
          $newConfig[ $config[$i]['key'] ] = $config[$i]['value'];
        }
        return response()->json($newConfig, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $module)
    {
      foreach($request->input() as $key => $values){
        Config::where( ['module'=> $module, 'key'=> $key])
              ->update(['value'=> $values ]);
      }
      return response()->json(['msg'=> 'Config updated'], 200);
    }
}
