<?php

use Illuminate\Database\Seeder;

class SlidersTableAutoSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('sliders')->delete();

        \DB::table('sliders')->insert(array (
            0 =>
            array (
                'id' => '1',
                'index' => '0',
                'title' => 'Edificio PH UH5',
                'subtitle' => NULL,
                'link' => '#',
                'filename' => 'slide_0.jpg',
            ),
            1 =>
            array (
                'id' => '2',
                'index' => '1',
                'title' => 'Edificio PH UH5',
                'subtitle' => NULL,
                'link' => '#',
                'filename' => 'slide_1.jpeg',
            ),
            2 =>
            array (
                'id' => '3',
                'index' => '2',
                'title' => 'Edificio PH UH5',
                'subtitle' => NULL,
                'link' => '#',
                'filename' => 'slide_2.jpeg',
            ),
            3 =>
            array (
                'id' => '4',
                'index' => '3',
                'title' => 'Prueba 3',
                'subtitle' => 'Subtítulo de prueba',
                'link' => '#',
                'filename' => NULL,
            ),
        ));


    }
}
