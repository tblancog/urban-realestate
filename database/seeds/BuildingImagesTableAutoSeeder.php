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
                'id' => '58',
                'filename' => 'building_5d49fa18f238c.jpeg',
                'order' => '0',
                'building_id' => '21',
            ),
            1 => 
            array (
                'id' => '59',
                'filename' => 'building_5d49fa67ba11f.jpg',
                'order' => '0',
                'building_id' => '21',
            ),
            2 => 
            array (
                'id' => '60',
                'filename' => 'building_5d49fa6824b64.jpg',
                'order' => '1',
                'building_id' => '21',
            ),
            3 => 
            array (
                'id' => '61',
                'filename' => 'building_5d49fa687cb12.jpg',
                'order' => '2',
                'building_id' => '21',
            ),
            4 => 
            array (
                'id' => '76',
                'filename' => 'building_5d4a050a4a25d.png',
                'order' => '0',
                'building_id' => '23',
            ),
            5 => 
            array (
                'id' => '77',
                'filename' => 'building_5d4a050b676f0.png',
                'order' => '1',
                'building_id' => '23',
            ),
            6 => 
            array (
                'id' => '78',
                'filename' => 'building_5d4a050c74195.png',
                'order' => '2',
                'building_id' => '23',
            ),
            7 => 
            array (
                'id' => '79',
                'filename' => 'building_5d4a050d5a7be.png',
                'order' => '3',
                'building_id' => '23',
            ),
            8 => 
            array (
                'id' => '80',
                'filename' => 'building_5d4a050e63868.png',
                'order' => '4',
                'building_id' => '23',
            ),
        ));
        
        
    }
}