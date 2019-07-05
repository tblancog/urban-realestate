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
        [ 'key' => 'investments.title', 'value'=> 'Edificios', 'type'=> 'string'],
        [ 'key' => 'investments.subtitle', 'value'=> 'Si estas interesado en realizar una inversión planificada, tenemos múltiples opciones de corto, mediano o largo plazo. Contactáte con nosotros y con gusto podremos asesorarte.', 'type'=> 'string'],
        [ 'key' => 'investments.form', 'value'=> 1, 'type'=> 'boolean'],

        [ 'key' => 'appraissals.title', 'value'=> 'Título', 'type'=> 'string'],
        [ 'key' => 'appraissals.subtitle', 'value'=> 'Directora Comercial: María Ester Cel. +54 9 11 5329-4260 Mail. info@urbanrealestate.com.ar', 'type'=> 'string'],
        [ 'key' => 'appraissals.form', 'value'=> 1, 'type'=> 'boolean'],

        [ 'key' => 'credits.title', 'value'=> 'Título', 'type'=> 'string'],
        [ 'key' => 'credits.subtitle', 'value'=> 'Directora Comercial: María Ester Cel. +54 9 11 5329-4260 Mail. info@urbanrealestate.com.ar', 'type'=> 'string'],
        [ 'key' => 'credits.form', 'value'=> 1, 'type'=> 'boolean'],

        [ 'key' => 'contacts.title', 'value'=> 'Título', 'type'=> 'string'],
        [ 'key' => 'contacts.subtitle', 'value'=> 'Directora Comercial: María Ester Cel. +54 9 11 5329-4260 Mail. info@urbanrealestate.com.ar', 'type'=> 'string'],
        [ 'key' => 'contacts.form', 'value'=> 1, 'type'=> 'boolean'],
      ];

      collect($data)->each(function($el){
        Config::create($el);
      });
    }
}
