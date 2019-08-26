<?php

use Illuminate\Database\Seeder;

class ConfigsTableAutoSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('configs')->delete();
        
        \DB::table('configs')->insert(array (
            0 => 
            array (
                'id' => '13',
                'module' => 'investments',
                'key' => 'title',
                'value' => 'Inversiones',
                'created_at' => '2019-07-30 20:23:21',
                'updated_at' => '2019-08-23 15:11:11',
            ),
            1 => 
            array (
                'id' => '14',
                'module' => 'investments',
                'key' => 'top_text',
                'value' => 'Tenemos excelentes inversiones inmobiliarias para ofrecerte.
Contactamos y con gusto podremos asesorarte.',
                'created_at' => '2019-07-30 20:23:21',
                'updated_at' => '2019-08-23 15:11:11',
            ),
            2 => 
            array (
                'id' => '15',
                'module' => 'investments',
                'key' => 'bottom_text',
                'value' => 'Nos comunicaremos a la brevedad.',
                'created_at' => '2019-07-30 20:23:21',
                'updated_at' => '2019-08-23 15:11:11',
            ),
            3 => 
            array (
                'id' => '16',
                'module' => 'investments',
                'key' => 'form',
                'value' => '1',
                'created_at' => '2019-07-30 20:23:21',
                'updated_at' => '2019-08-23 15:11:12',
            ),
            4 => 
            array (
                'id' => '17',
                'module' => 'appraisals',
                'key' => 'title',
                'value' => 'Tasaciones',
                'created_at' => '2019-07-30 20:23:21',
                'updated_at' => '2019-08-23 15:10:56',
            ),
            5 => 
            array (
                'id' => '18',
                'module' => 'appraisals',
                'key' => 'top_text',
                'value' => 'Si estás interesado en que visitemos tu propiedad y la tasemos, contactate con nosotros y nos estaremos comunicando a la brevedad.',
                'created_at' => '2019-07-30 20:23:21',
                'updated_at' => '2019-08-23 15:10:56',
            ),
            6 => 
            array (
                'id' => '19',
                'module' => 'appraisals',
                'key' => 'bottom_text',
                'value' => 'Contacto Comercial: +54 9 11 5329-4260 
Mail. info@urbanrealestate.com.ar',
                'created_at' => '2019-07-30 20:23:21',
                'updated_at' => '2019-08-23 15:10:57',
            ),
            7 => 
            array (
                'id' => '20',
                'module' => 'appraisals',
                'key' => 'form',
                'value' => '1',
                'created_at' => '2019-07-30 20:23:21',
                'updated_at' => '2019-08-23 15:10:57',
            ),
            8 => 
            array (
                'id' => '21',
                'module' => 'credits',
                'key' => 'title',
                'value' => 'Créditos',
                'created_at' => '2019-07-30 20:23:21',
                'updated_at' => '2019-08-23 15:12:03',
            ),
            9 => 
            array (
                'id' => '22',
                'module' => 'credits',
                'key' => 'top_text',
                'value' => 'Tenemos propiedades con financiación en pesos. 
También ofrecemos nuestro asesoramiento para la solicitud de créditos hipotecarios.
Por favor completá el formulario y nos comunicaremos a la brevedad.',
                'created_at' => '2019-07-30 20:23:21',
                'updated_at' => '2019-08-23 15:12:03',
            ),
            10 => 
            array (
                'id' => '23',
                'module' => 'credits',
                'key' => 'bottom_text',
                'value' => 'Contacto Comercial: +54 9 11 5329-4260 
Mail. info@urbanrealestate.com.ar',
                'created_at' => '2019-07-30 20:23:21',
                'updated_at' => '2019-08-23 15:12:04',
            ),
            11 => 
            array (
                'id' => '24',
                'module' => 'credits',
                'key' => 'form',
                'value' => '1',
                'created_at' => '2019-07-30 20:23:21',
                'updated_at' => '2019-08-23 15:12:04',
            ),
            12 => 
            array (
                'id' => '25',
                'module' => 'contact',
                'key' => 'title',
                'value' => 'Contacto',
                'created_at' => '2019-07-30 20:23:21',
                'updated_at' => '2019-07-30 20:23:21',
            ),
            13 => 
            array (
                'id' => '26',
                'module' => 'contact',
                'key' => 'top_text',
                'value' => 'Si estás interesado en que visitemos tu propiedad y la tasemos, contactate con nosotros y nos estaremos comunicando a la brevedad.',
                'created_at' => '2019-07-30 20:23:21',
                'updated_at' => '2019-07-30 20:23:21',
            ),
            14 => 
            array (
                'id' => '27',
                'module' => 'contact',
                'key' => 'bottom_text',
                'value' => 'Contacto Comercial: +54 9 11 5329-4260 Mail. info@urbanrealestate.com.ar',
                'created_at' => '2019-07-30 20:23:21',
                'updated_at' => '2019-07-30 20:23:21',
            ),
            15 => 
            array (
                'id' => '28',
                'module' => 'contact',
                'key' => 'form',
                'value' => '1',
                'created_at' => '2019-07-30 20:23:21',
                'updated_at' => '2019-07-30 20:23:21',
            ),
        ));
        
        
    }
}