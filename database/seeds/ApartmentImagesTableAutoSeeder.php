<?php

use Illuminate\Database\Seeder;

class ApartmentImagesTableAutoSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('apartment_images')->delete();
        
        \DB::table('apartment_images')->insert(array (
            0 => 
            array (
                'id' => '1',
                'filename' => 'apartment_0.jpg',
                'order' => '0',
                'apartment_id' => '1',
            ),
            1 => 
            array (
                'id' => '2',
                'filename' => 'apartment_0.png',
                'order' => '0',
                'apartment_id' => '2',
            ),
            2 => 
            array (
                'id' => '3',
                'filename' => 'apartment_1.png',
                'order' => '1',
                'apartment_id' => '2',
            ),
            3 => 
            array (
                'id' => '28',
                'filename' => 'apartment_0.jpg',
                'order' => '0',
                'apartment_id' => '3',
            ),
            4 => 
            array (
                'id' => '29',
                'filename' => 'apartment_1.jpg',
                'order' => '1',
                'apartment_id' => '3',
            ),
            5 => 
            array (
                'id' => '30',
                'filename' => 'apartment_2.jpg',
                'order' => '2',
                'apartment_id' => '3',
            ),
        ));
        
        
    }
}