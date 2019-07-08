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
        return $newConfig;
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
      $input = collect($request->input());
      // $keys= $input->keys();
      // dd($input);

      // dd($input->combine($keys)->all());

      // $data = [];
      // foreach($input as $key => $value){
      //   $data[] = [ $key => $value];
      // }
      // return $input;

      // return Config::where('module', $module)->get();
        foreach($input as $key => $in){
          // dump($in);
          // dump($key);
          return Config::where( ['module'=> $module])
                        ->update(['key'=> $key, 'value'=> $in ]);
        }
      // return Config::where([
      //               ['module'=> $module],
      //               ['key'=> $input->keys() ],
      //               ])
      //             ->update(
      //               ['value'=> $input['title']],
      //             );
    }
}
