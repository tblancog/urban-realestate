<?php

use Illuminate\Database\Seeder;

class ApartmentAmenitiesTableAutoSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('apartment_amenities')->delete();
        
        \DB::table('apartment_amenities')->insert(array (
            0 => 
            array (
                'id' => '1',
                'amenity_id' => '6',
                'apartment_id' => '1',
            ),
            1 => 
            array (
                'id' => '2',
                'amenity_id' => '5',
                'apartment_id' => '1',
            ),
            2 => 
            array (
                'id' => '3',
                'amenity_id' => '29',
                'apartment_id' => '1',
            ),
            3 => 
            array (
                'id' => '4',
                'amenity_id' => '5',
                'apartment_id' => '2',
            ),
            4 => 
            array (
                'id' => '5',
                'amenity_id' => '1',
                'apartment_id' => '2',
            ),
            5 => 
            array (
                'id' => '6',
                'amenity_id' => '12',
                'apartment_id' => '2',
            ),
            6 => 
            array (
                'id' => '7',
                'amenity_id' => '29',
                'apartment_id' => '3',
            ),
            7 => 
            array (
                'id' => '8',
                'amenity_id' => '6',
                'apartment_id' => '3',
            ),
            8 => 
            array (
                'id' => '9',
                'amenity_id' => '10',
                'apartment_id' => '3',
            ),
            9 => 
            array (
                'id' => '10',
                'amenity_id' => '8',
                'apartment_id' => '4',
            ),
            10 => 
            array (
                'id' => '11',
                'amenity_id' => '9',
                'apartment_id' => '4',
            ),
            11 => 
            array (
                'id' => '12',
                'amenity_id' => '24',
                'apartment_id' => '14',
            ),
            12 => 
            array (
                'id' => '13',
                'amenity_id' => '16',
                'apartment_id' => '14',
            ),
            13 => 
            array (
                'id' => '14',
                'amenity_id' => '26',
                'apartment_id' => '15',
            ),
            14 => 
            array (
                'id' => '15',
                'amenity_id' => '37',
                'apartment_id' => '15',
            ),
            15 => 
            array (
                'id' => '16',
                'amenity_id' => '16',
                'apartment_id' => '16',
            ),
            16 => 
            array (
                'id' => '17',
                'amenity_id' => '38',
                'apartment_id' => '16',
            ),
        ));
        
        
    }
}