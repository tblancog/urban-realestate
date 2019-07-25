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
        [ 'module'=> 'investments', 'key' => 'title', 'value'=> 'Inversiones'],
        [ 'module'=> 'investments', 'key' => 'subtitle', 'value'=> 'Si estas interesado en realizar una inversión planificada, tenemos múltiples opciones de corto, mediano o largo plazo. Contactáte con nosotros y con gusto podremos asesorarte.'],
        [ 'module'=> 'investments', 'key' => 'form', 'value'=> 1],

        [ 'module'=> 'appraisals', 'key' => 'title', 'value'=> 'Tasaciones'],
        [ 'module'=> 'appraisals', 'key' => 'subtitle', 'value'=> 'Contacto Comercial: +54 9 11 5329-4260 Mail. info@urbanrealestate.com.ar'],
        [ 'module'=> 'appraisals', 'key' => 'form', 'value'=> 1],

        [ 'module'=> 'credits', 'key' => 'title', 'value'=> 'Créditos'],
        [ 'module'=> 'credits', 'key' => 'subtitle', 'value'=> 'Contacto Comercial: +54 9 11 5329-4260 Mail. info@urbanrealestate.com.ar'],
        [ 'module'=> 'credits', 'key' => 'form', 'value'=> 1],

        [ 'module'=> 'contact', 'key' => 'title', 'value'=> 'Contacto'],
        [ 'module'=> 'contact', 'key' => 'subtitle', 'value'=> 'Contacto Comercial: +54 9 11 5329-4260 Mail. info@urbanrealestate.com.ar'],
        [ 'module'=> 'contact', 'key' => 'form', 'value'=> 1],
      ];

      collect($data)->each(function($el){
        Config::create($el);
      });
    }
}
