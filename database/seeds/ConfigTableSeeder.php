<?php

use Illuminate\Database\Seeder;
use App\Config;

class ConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $data = [
        [ 'module'=> 'investments', 'key' => 'title', 'value'=> 'Edificios'],
        [ 'module'=> 'investments', 'key' => 'subtitle', 'value'=> 'Si estas interesado en realizar una inversión planificada, tenemos múltiples opciones de corto, mediano o largo plazo. Contactáte con nosotros y con gusto podremos asesorarte.'],
        [ 'module'=> 'investments', 'key' => 'form', 'value'=> 1],

        [ 'module'=> 'appraissals', 'key' => 'title', 'value'=> 'Título'],
        [ 'module'=> 'appraissals', 'key' => 'subtitle', 'value'=> 'Directora Comercial: María Ester Cel. +54 9 11 5329-4260 Mail. info@urbanrealestate.com.ar'],
        [ 'module'=> 'appraissals', 'key' => 'form', 'value'=> 1],

        [ 'module'=> 'credits', 'key' => 'title', 'value'=> 'Título'],
        [ 'module'=> 'credits', 'key' => 'subtitle', 'value'=> 'Directora Comercial: María Ester Cel. +54 9 11 5329-4260 Mail. info@urbanrealestate.com.ar'],
        [ 'module'=> 'credits', 'key' => 'form', 'value'=> 1],

        [ 'module'=> 'contacts', 'key' => 'title', 'value'=> 'Título'],
        [ 'module'=> 'contacts', 'key' => 'subtitle', 'value'=> 'Directora Comercial: María Ester Cel. +54 9 11 5329-4260 Mail. info@urbanrealestate.com.ar'],
        [ 'module'=> 'contacts', 'key' => 'form', 'value'=> 1],
      ];

      collect($data)->each(function($el){
        Config::create($el);
      });
    }
}
