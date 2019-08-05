<?php

use Illuminate\Database\Seeder;

class BuildingImagesTableAutoSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('building_images')->delete();
        
        \DB::table('building_images')->insert(array (
            0 => 
            array (
                'id' => '1',
                'filename' => 'building_0.jpg',
                'order' => '0',
                'building_id' => '1',
            ),
            1 => 
            array (
                'id' => '2',
                'filename' => 'building_0.jpg',
                'order' => '0',
                'building_id' => '2',
            ),
            2 => 
            array (
                'id' => '3',
                'filename' => 'building_0.jpg',
                'order' => '0',
                'building_id' => '3',
            ),
            3 => 
            array (
                'id' => '4',
                'filename' => 'building_1.jpg',
                'order' => '1',
                'building_id' => '3',
            ),
            4 => 
            array (
                'id' => '5',
                'filename' => 'building_2.jpg',
                'order' => '2',
                'building_id' => '3',
            ),
        ));
        
        
    }
}