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
                'title' => 'ascensor',
                'icon' => 'ascensor.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => '2',
                'title' => 'cocheras',
                'icon' => 'cocheras.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => '3',
                'title' => 'conserjeria',
                'icon' => 'conserjeria.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array (
                'id' => '4',
                'title' => 'gimnasio',
                'icon' => 'gimnasio.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array (
                'id' => '5',
                'title' => 'lavadero',
                'icon' => 'lavadero.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array (
                'id' => '6',
                'title' => 'parrilla',
                'icon' => 'parrilla.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 =>
            array (
                'id' => '7',
                'title' => 'pileta',
                'icon' => 'pileta.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 =>
            array (
                'id' => '8',
                'title' => 'sauna',
                'icon' => 'sauna.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 =>
            array (
                'id' => '9',
                'title' => 'sum',
                'icon' => 'sum.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 =>
            array (
                'id' => '10',
                'title' => 'wifi',
                'icon' => 'wifi.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        )
        );
    }
}
