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
                'filename' => 'building_5d5c05f213dd8.jpeg',
                'order' => '0',
                'building_id' => '1',
            ),
            1 => 
            array (
                'id' => '13',
                'filename' => 'building_5d5c28c38c11b.png',
                'order' => '0',
                'building_id' => '2',
            ),
            2 => 
            array (
                'id' => '14',
                'filename' => 'building_5d5c28c4c33bf.png',
                'order' => '1',
                'building_id' => '2',
            ),
            3 => 
            array (
                'id' => '15',
                'filename' => 'building_5d5c28c5dd48b.png',
                'order' => '2',
                'building_id' => '2',
            ),
            4 => 
            array (
                'id' => '16',
                'filename' => 'building_5d5c28c6c03db.png',
                'order' => '3',
                'building_id' => '2',
            ),
            5 => 
            array (
                'id' => '17',
                'filename' => 'building_5d5c28c7d1190.png',
                'order' => '4',
                'building_id' => '2',
            ),
            6 => 
            array (
                'id' => '18',
                'filename' => 'building_5d6033b23228b.jpeg',
                'order' => '0',
                'building_id' => '1',
            ),
            7 => 
            array (
                'id' => '19',
                'filename' => 'building_5d6033b5c3e18.jpeg',
                'order' => '1',
                'building_id' => '1',
            ),
            8 => 
            array (
                'id' => '20',
                'filename' => 'building_5d6033b666745.jpeg',
                'order' => '2',
                'building_id' => '1',
            ),
            9 => 
            array (
                'id' => '21',
                'filename' => 'building_5d6033b6c33d4.jpeg',
                'order' => '3',
                'building_id' => '1',
            ),
        ));
        
        
    }
}