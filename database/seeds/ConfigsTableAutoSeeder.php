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
                'updated_at' => '2019-08-08 13:10:48',
            ),
            1 => 
            array (
                'id' => '14',
                'module' => 'investments',
                'key' => 'top_text',
                'value' => 'Si estás interesado en que visitemos tu propiedad y la tasemos, contactate con nosotros y nos estaremos comunicando a la brevedad.',
                'created_at' => '2019-07-30 20:23:21',
                'updated_at' => '2019-08-08 13:10:48',
            ),
            2 => 
            array (
                'id' => '15',
                'module' => 'investments',
                'key' => 'bottom_text',
                'value' => 'Contacto: mep.urban@gmail.com',
                'created_at' => '2019-07-30 20:23:21',
                'updated_at' => '2019-08-08 13:10:48',
            ),
            3 => 
            array (
                'id' => '16',
                'module' => 'investments',
                'key' => 'form',
                'value' => '1',
                'created_at' => '2019-07-30 20:23:21',
                'updated_at' => '2019-08-08 13:10:48',
            ),
            4 => 
            array (
                'id' => '17',
                'module' => 'appraisals',
                'key' => 'title',
                'value' => 'Tasaciones',
                'created_at' => '2019-07-30 20:23:21',
                'updated_at' => '2019-07-30 20:23:21',
            ),
            5 => 
            array (
                'id' => '18',
                'module' => 'appraisals',
                'key' => 'top_text',
                'value' => 'Si estás interesado en que visitemos tu propiedad y la tasemos, contactate con nosotros y nos estaremos comunicando a la brevedad.',
                'created_at' => '2019-07-30 20:23:21',
                'updated_at' => '2019-07-30 20:23:21',
            ),
            6 => 
            array (
                'id' => '19',
                'module' => 'appraisals',
                'key' => 'bottom_text',
                'value' => 'Contacto Comercial: +54 9 11 5329-4260 Mail. info@urbanrealestate.com.ar',
                'created_at' => '2019-07-30 20:23:21',
                'updated_at' => '2019-07-30 20:23:21',
            ),
            7 => 
            array (
                'id' => '20',
                'module' => 'appraisals',
                'key' => 'form',
                'value' => '1',
                'created_at' => '2019-07-30 20:23:21',
                'updated_at' => '2019-07-30 20:23:21',
            ),
            8 => 
            array (
                'id' => '21',
                'module' => 'credits',
                'key' => 'title',
                'value' => 'Créditos',
                'created_at' => '2019-07-30 20:23:21',
                'updated_at' => '2019-07-30 20:23:21',
            ),
            9 => 
            array (
                'id' => '22',
                'module' => 'credits',
                'key' => 'top_text',
                'value' => 'Si estás interesado en que visitemos tu propiedad y la tasemos, contactate con nosotros y nos estaremos comunicando a la brevedad.',
                'created_at' => '2019-07-30 20:23:21',
                'updated_at' => '2019-07-30 20:23:21',
            ),
            10 => 
            array (
                'id' => '23',
                'module' => 'credits',
                'key' => 'bottom_text',
                'value' => 'Contacto Comercial: +54 9 11 5329-4260 Mail. info@urbanrealestate.com.ar',
                'created_at' => '2019-07-30 20:23:21',
                'updated_at' => '2019-07-30 20:23:21',
            ),
            11 => 
            array (
                'id' => '24',
                'module' => 'credits',
                'key' => 'form',
                'value' => '1',
                'created_at' => '2019-07-30 20:23:21',
                'updated_at' => '2019-07-30 20:23:21',
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