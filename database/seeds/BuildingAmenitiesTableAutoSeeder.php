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
                'id' => '19',
                'amenity_id' => '25',
                'building_id' => '10',
            ),
            8 => 
            array (
                'id' => '20',
                'amenity_id' => '25',
                'building_id' => '11',
            ),
            9 => 
            array (
                'id' => '29',
                'amenity_id' => '18',
                'building_id' => '3',
            ),
            10 => 
            array (
                'id' => '30',
                'amenity_id' => '18',
                'building_id' => '4',
            ),
            11 => 
            array (
                'id' => '31',
                'amenity_id' => '37',
                'building_id' => '4',
            ),
            12 => 
            array (
                'id' => '32',
                'amenity_id' => '26',
                'building_id' => '5',
            ),
            13 => 
            array (
                'id' => '33',
                'amenity_id' => '29',
                'building_id' => '5',
            ),
            14 => 
            array (
                'id' => '34',
                'amenity_id' => '25',
                'building_id' => '6',
            ),
            15 => 
            array (
                'id' => '35',
                'amenity_id' => '8',
                'building_id' => '6',
            ),
            16 => 
            array (
                'id' => '36',
                'amenity_id' => '25',
                'building_id' => '7',
            ),
            17 => 
            array (
                'id' => '37',
                'amenity_id' => '18',
                'building_id' => '7',
            ),
            18 => 
            array (
                'id' => '38',
                'amenity_id' => '25',
                'building_id' => '8',
            ),
            19 => 
            array (
                'id' => '39',
                'amenity_id' => '18',
                'building_id' => '8',
            ),
            20 => 
            array (
                'id' => '40',
                'amenity_id' => '25',
                'building_id' => '9',
            ),
            21 => 
            array (
                'id' => '41',
                'amenity_id' => '18',
                'building_id' => '10',
            ),
            22 => 
            array (
                'id' => '42',
                'amenity_id' => '8',
                'building_id' => '11',
            ),
            23 => 
            array (
                'id' => '43',
                'amenity_id' => '25',
                'building_id' => '12',
            ),
            24 => 
            array (
                'id' => '44',
                'amenity_id' => '11',
                'building_id' => '12',
            ),
            25 => 
            array (
                'id' => '45',
                'amenity_id' => '8',
                'building_id' => '13',
            ),
            26 => 
            array (
                'id' => '46',
                'amenity_id' => '18',
                'building_id' => '13',
            ),
            27 => 
            array (
                'id' => '47',
                'amenity_id' => '8',
                'building_id' => '14',
            ),
            28 => 
            array (
                'id' => '48',
                'amenity_id' => '18',
                'building_id' => '14',
            ),
            29 => 
            array (
                'id' => '49',
                'amenity_id' => '18',
                'building_id' => '15',
            ),
            30 => 
            array (
                'id' => '50',
                'amenity_id' => '26',
                'building_id' => '15',
            ),
            31 => 
            array (
                'id' => '51',
                'amenity_id' => '25',
                'building_id' => '16',
            ),
            32 => 
            array (
                'id' => '52',
                'amenity_id' => '11',
                'building_id' => '16',
            ),
            33 => 
            array (
                'id' => '53',
                'amenity_id' => '26',
                'building_id' => '17',
            ),
            34 => 
            array (
                'id' => '54',
                'amenity_id' => '37',
                'building_id' => '17',
            ),
            35 => 
            array (
                'id' => '55',
                'amenity_id' => '25',
                'building_id' => '19',
            ),
            36 => 
            array (
                'id' => '56',
                'amenity_id' => '18',
                'building_id' => '19',
            ),
            37 => 
            array (
                'id' => '57',
                'amenity_id' => '18',
                'building_id' => '20',
            ),
            38 => 
            array (
                'id' => '58',
                'amenity_id' => '37',
                'building_id' => '20',
            ),
            39 => 
            array (
                'id' => '59',
                'amenity_id' => '29',
                'building_id' => '20',
            ),
            40 => 
            array (
                'id' => '60',
                'amenity_id' => '32',
                'building_id' => '20',
            ),
            41 => 
            array (
                'id' => '61',
                'amenity_id' => '12',
                'building_id' => '20',
            ),
            42 => 
            array (
                'id' => '62',
                'amenity_id' => '13',
                'building_id' => '20',
            ),
            43 => 
            array (
                'id' => '63',
                'amenity_id' => '39',
                'building_id' => '20',
            ),
            44 => 
            array (
                'id' => '64',
                'amenity_id' => '31',
                'building_id' => '20',
            ),
            45 => 
            array (
                'id' => '65',
                'amenity_id' => '8',
                'building_id' => '20',
            ),
            46 => 
            array (
                'id' => '66',
                'amenity_id' => '16',
                'building_id' => '20',
            ),
            47 => 
            array (
                'id' => '67',
                'amenity_id' => '8',
                'building_id' => '21',
            ),
            48 => 
            array (
                'id' => '68',
                'amenity_id' => '16',
                'building_id' => '21',
            ),
            49 => 
            array (
                'id' => '69',
                'amenity_id' => '18',
                'building_id' => '21',
            ),
            50 => 
            array (
                'id' => '70',
                'amenity_id' => '37',
                'building_id' => '21',
            ),
            51 => 
            array (
                'id' => '71',
                'amenity_id' => '29',
                'building_id' => '21',
            ),
            52 => 
            array (
                'id' => '72',
                'amenity_id' => '40',
                'building_id' => '21',
            ),
            53 => 
            array (
                'id' => '73',
                'amenity_id' => '32',
                'building_id' => '21',
            ),
            54 => 
            array (
                'id' => '74',
                'amenity_id' => '19',
                'building_id' => '21',
            ),
            55 => 
            array (
                'id' => '75',
                'amenity_id' => '12',
                'building_id' => '21',
            ),
            56 => 
            array (
                'id' => '76',
                'amenity_id' => '38',
                'building_id' => '21',
            ),
            57 => 
            array (
                'id' => '77',
                'amenity_id' => '9',
                'building_id' => '21',
            ),
            58 => 
            array (
                'id' => '78',
                'amenity_id' => '1',
                'building_id' => '21',
            ),
            59 => 
            array (
                'id' => '79',
                'amenity_id' => '39',
                'building_id' => '21',
            ),
            60 => 
            array (
                'id' => '80',
                'amenity_id' => '18',
                'building_id' => '23',
            ),
            61 => 
            array (
                'id' => '81',
                'amenity_id' => '11',
                'building_id' => '23',
            ),
            62 => 
            array (
                'id' => '82',
                'amenity_id' => '37',
                'building_id' => '23',
            ),
            63 => 
            array (
                'id' => '83',
                'amenity_id' => '29',
                'building_id' => '23',
            ),
            64 => 
            array (
                'id' => '84',
                'amenity_id' => '32',
                'building_id' => '23',
            ),
            65 => 
            array (
                'id' => '85',
                'amenity_id' => '22',
                'building_id' => '23',
            ),
            66 => 
            array (
                'id' => '86',
                'amenity_id' => '19',
                'building_id' => '23',
            ),
            67 => 
            array (
                'id' => '87',
                'amenity_id' => '16',
                'building_id' => '23',
            ),
            68 => 
            array (
                'id' => '88',
                'amenity_id' => '9',
                'building_id' => '23',
            ),
            69 => 
            array (
                'id' => '89',
                'amenity_id' => '1',
                'building_id' => '23',
            ),
        ));
        
        
    }
}