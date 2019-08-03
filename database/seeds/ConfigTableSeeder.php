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
        // Investments
        [ 'module'=> 'investments', 'key' => 'title', 'value'=> 'Inversiones'],
        [ 'module'=> 'investments', 'key' => 'top_text', 'value'=> 'Si estás interesado en que visitemos tu propiedad y la tasemos, contactate con nosotros y nos estaremos comunicando a la brevedad.'],
        [ 'module'=> 'investments', 'key' => 'bottom_text', 'value'=> 'Contacto Comercial: +54 9 11 5329-4260 Mail. info@urbanrealestate.com.ar'],
        [ 'module'=> 'investments', 'key' => 'form', 'value'=> 1],

        // Appraissals
        [ 'module'=> 'appraisals', 'key' => 'title', 'value'=> 'Tasaciones'],
        [ 'module'=> 'appraisals', 'key' => 'top_text', 'value'=> 'Si estás interesado en que visitemos tu propiedad y la tasemos, contactate con nosotros y nos estaremos comunicando a la brevedad.'],
        [ 'module'=> 'appraisals', 'key' => 'bottom_text', 'value'=> 'Contacto Comercial: +54 9 11 5329-4260 Mail. info@urbanrealestate.com.ar'],
        [ 'module'=> 'appraisals', 'key' => 'form', 'value'=> 1],

        // Credits
        [ 'module'=> 'credits', 'key' => 'title', 'value'=> 'Crédito'],
        [ 'module'=> 'credits', 'key' => 'top_text', 'value'=> 'Si estás interesado en que visitemos tu propiedad y la tasemos, contactate con nosotros y nos estaremos comunicando a la brevedad.'],
        [ 'module'=> 'credits', 'key' => 'bottom_text', 'value'=> 'Contacto Comercial: +54 9 11 5329-4260 Mail. info@urbanrealestate.com.ar'],
        [ 'module'=> 'credits', 'key' => 'form', 'value'=> 1],

        // Contact
        [ 'module'=> 'contact', 'key' => 'title', 'value'=> 'Contacto'],
        [ 'module'=> 'contact', 'key' => 'top_text', 'value'=> 'Si estás interesado en que visitemos tu propiedad y la tasemos, contactate con nosotros y nos estaremos comunicando a la brevedad.'],
        [ 'module'=> 'contact', 'key' => 'bottom_text', 'value'=> 'Contacto Comercial: +54 9 11 5329-4260 Mail. info@urbanrealestate.com.ar'],
        [ 'module'=> 'contact', 'key' => 'form', 'value'=> 1],
      ];

      collect($data)->each(function($el){
        Config::create($el);
      });
    }
}
