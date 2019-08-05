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
                'id' => '1',
                'amenity_id' => '5',
                'building_id' => '1',
            ),
            1 => 
            array (
                'id' => '2',
                'amenity_id' => '6',
                'building_id' => '1',
            ),
            2 => 
            array (
                'id' => '3',
                'amenity_id' => '5',
                'building_id' => '2',
            ),
            3 => 
            array (
                'id' => '4',
                'amenity_id' => '29',
                'building_id' => '2',
            ),
            4 => 
            array (
                'id' => '5',
                'amenity_id' => '12',
                'building_id' => '2',
            ),
            5 => 
            array (
                'id' => '6',
                'amenity_id' => '22',
                'building_id' => '2',
            ),
            6 => 
            array (
                'id' => '7',
                'amenity_id' => '37',
                'building_id' => '3',
            ),
            7 => 
            array (
                'id' => '8',
                'amenity_id' => '26',
                'building_id' => '3',
            ),
            8 => 
            array (
                'id' => '9',
                'amenity_id' => '24',
                'building_id' => '4',
            ),
            9 => 
            array (
                'id' => '10',
                'amenity_id' => '8',
                'building_id' => '4',
            ),
            10 => 
            array (
                'id' => '11',
                'amenity_id' => '24',
                'building_id' => '5',
            ),
            11 => 
            array (
                'id' => '12',
                'amenity_id' => '16',
                'building_id' => '5',
            ),
            12 => 
            array (
                'id' => '13',
                'amenity_id' => '24',
                'building_id' => '6',
            ),
            13 => 
            array (
                'id' => '14',
                'amenity_id' => '33',
                'building_id' => '6',
            ),
            14 => 
            array (
                'id' => '15',
                'amenity_id' => '33',
                'building_id' => '7',
            ),
            15 => 
            array (
                'id' => '16',
                'amenity_id' => '9',
                'building_id' => '7',
            ),
            16 => 
            array (
                'id' => '17',
                'amenity_id' => '11',
                'building_id' => '9',
            ),
            17 => 
            array (
                'id' => '18',
                'amenity_id' => '29',
                'building_id' => '9',
            ),
            18 => 
            array (
                'id' => '19',
                'amenity_id' => '25',
                'building_id' => '10',
            ),
            19 => 
            array (
                'id' => '20',
                'amenity_id' => '25',
                'building_id' => '11',
            ),
            20 => 
            array (
                'id' => '21',
                'amenity_id' => '11',
                'building_id' => '11',
            ),
            21 => 
            array (
                'id' => '22',
                'amenity_id' => '19',
                'building_id' => '11',
            ),
            22 => 
            array (
                'id' => '23',
                'amenity_id' => '8',
                'building_id' => '12',
            ),
            23 => 
            array (
                'id' => '24',
                'amenity_id' => '7',
                'building_id' => '13',
            ),
            24 => 
            array (
                'id' => '25',
                'amenity_id' => '26',
                'building_id' => '13',
            ),
            25 => 
            array (
                'id' => '26',
                'amenity_id' => '25',
                'building_id' => '14',
            ),
            26 => 
            array (
                'id' => '27',
                'amenity_id' => '26',
                'building_id' => '14',
            ),
            27 => 
            array (
                'id' => '28',
                'amenity_id' => '8',
                'building_id' => '15',
            ),
        ));
        
        
    }
}