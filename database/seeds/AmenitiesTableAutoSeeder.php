<?php

use Illuminate\Database\Seeder;

class AmenitiesTableAutoSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('amenities')->delete();
        
        \DB::table('amenities')->insert(array (
            0 => 
            array (
                'id' => '1',
                'title' => 'cochera',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => '2',
                'title' => 'piscina',
                'icon' => 'amen_03.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => '3',
                'title' => 'gimnasio',
                'icon' => 'amen_08.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => '4',
                'title' => 'sum',
                'icon' => 'amen_01.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => '5',
                'title' => 'parrilla',
                'icon' => 'amen_05.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => '6',
                'title' => 'ascensor',
                'icon' => 'amen_07.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => '7',
                'title' => 'Aire acondicionado Individual',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => '8',
                'title' => 'Apto mascotas',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => '9',
                'title' => 'Calefaccción Individual',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => '10',
                'title' => 'Cochera subterránea',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => '11',
                'title' => 'Hidromasaje',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => '12',
                'title' => 'Parrilla',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => '13',
                'title' => 'Quincho',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => '14',
                'title' => 'Sala de juegos',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => '15',
                'title' => 'Seguridad diurna',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => '16',
                'title' => 'Apto profesional',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => '17',
                'title' => 'Calefacción por Aire',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => '18',
                'title' => 'Deck',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => '19',
                'title' => 'Lavadero',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => '20',
                'title' => 'Perimetral',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => '21',
                'title' => 'Riego automático',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => '22',
                'title' => 'Sauna',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => '23',
                'title' => 'Seguridad portería',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => '24',
                'title' => 'Amoblado',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => '25',
                'title' => 'Calefacción',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => '26',
                'title' => 'Calefacción por radiadores',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => '27',
                'title' => 'En construcción',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => '28',
                'title' => 'Lote interno',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => '29',
                'title' => 'Piscina',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => '30',
                'title' => 'Ruta',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => '31',
                'title' => 'Seguridad',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => '32',
                'title' => 'Solarium',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => '33',
                'title' => 'Apto crédito',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => '34',
                'title' => 'Calefacción central',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => '35',
                'title' => 'Centro de deportes',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => '36',
                'title' => 'Gimnasio',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => '37',
                'title' => 'Luminoso',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => '38',
                'title' => 'Preinstalación de A/A',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => '39',
                'title' => 'SUM',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => '40',
                'title' => 'Seguridad 24hs',
                'icon' => 'amen_02.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}