<?php

use Illuminate\Database\Seeder;

class BuildingAmenitiesTableAutoSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('building_amenities')->delete();
        
        \DB::table('building_amenities')->insert(array (
            0 => 
            array (
                'id' => '16',
                'amenity_id' => '1',
                'building_id' => '2',
            ),
            1 => 
            array (
                'id' => '17',
                'amenity_id' => '4',
                'building_id' => '2',
            ),
            2 => 
            array (
                'id' => '18',
                'amenity_id' => '5',
                'building_id' => '2',
            ),
            3 => 
            array (
                'id' => '19',
                'amenity_id' => '9',
                'building_id' => '2',
            ),
            4 => 
            array (
                'id' => '20',
                'amenity_id' => '5',
                'building_id' => '1',
            ),
            5 => 
            array (
                'id' => '21',
                'amenity_id' => '1',
                'building_id' => '1',
            ),
            6 => 
            array (
                'id' => '22',
                'amenity_id' => '3',
                'building_id' => '1',
            ),
            7 => 
            array (
                'id' => '23',
                'amenity_id' => '6',
                'building_id' => '1',
            ),
            8 => 
            array (
                'id' => '24',
                'amenity_id' => '9',
                'building_id' => '1',
            ),
            9 => 
            array (
                'id' => '25',
                'amenity_id' => '2',
                'building_id' => '1',
            ),
            10 => 
            array (
                'id' => '27',
                'amenity_id' => '7',
                'building_id' => '1',
            ),
            11 => 
            array (
                'id' => '29',
                'amenity_id' => '10',
                'building_id' => '1',
            ),
        ));
        
        
    }
}