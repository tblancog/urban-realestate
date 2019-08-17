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
                'id' => '50',
                'filename' => 'apartment_5d56180572663.png',
                'order' => '0',
                'apartment_id' => '2',
            ),
            1 => 
            array (
                'id' => '51',
                'filename' => 'apartment_5d56180690372.png',
                'order' => '1',
                'apartment_id' => '2',
            ),
            2 => 
            array (
                'id' => '52',
                'filename' => 'apartment_5d5618074baad.png',
                'order' => '2',
                'apartment_id' => '2',
            ),
            3 => 
            array (
                'id' => '53',
                'filename' => 'apartment_5d5618081605b.png',
                'order' => '3',
                'apartment_id' => '2',
            ),
            4 => 
            array (
                'id' => '58',
                'filename' => 'apartment_5d5619b0a64a3.png',
                'order' => '0',
                'apartment_id' => '8',
            ),
            5 => 
            array (
                'id' => '59',
                'filename' => 'apartment_5d5619b194c1b.png',
                'order' => '1',
                'apartment_id' => '8',
            ),
            6 => 
            array (
                'id' => '60',
                'filename' => 'apartment_5d5619b238f6f.png',
                'order' => '2',
                'apartment_id' => '8',
            ),
            7 => 
            array (
                'id' => '61',
                'filename' => 'apartment_5d5619b3390e3.png',
                'order' => '3',
                'apartment_id' => '8',
            ),
            8 => 
            array (
                'id' => '62',
                'filename' => 'apartment_5d5619b3c6991.png',
                'order' => '4',
                'apartment_id' => '8',
            ),
            9 => 
            array (
                'id' => '63',
                'filename' => 'apartment_5d5619b0a64a3.png',
                'order' => '0',
                'apartment_id' => '9',
            ),
            10 => 
            array (
                'id' => '67',
                'filename' => 'apartment_5d5619b3c6991.png',
                'order' => '4',
                'apartment_id' => '9',
            ),
            11 => 
            array (
                'id' => '71',
                'filename' => 'apartment_5d56dfb2dedfa.png',
                'order' => '0',
                'apartment_id' => '10',
            ),
            12 => 
            array (
                'id' => '72',
                'filename' => 'apartment_5d56dfb40dcdd.png',
                'order' => '1',
                'apartment_id' => '10',
            ),
            13 => 
            array (
                'id' => '74',
                'filename' => 'apartment_5d56dfb70306e.png',
                'order' => '3',
                'apartment_id' => '10',
            ),
            14 => 
            array (
                'id' => '75',
                'filename' => 'apartment_5d56dfb812395.png',
                'order' => '4',
                'apartment_id' => '10',
            ),
            15 => 
            array (
                'id' => '76',
                'filename' => 'apartment_5d56dfd70e53f.png',
                'order' => '0',
                'apartment_id' => '10',
            ),
            16 => 
            array (
                'id' => '78',
                'filename' => 'apartment_5d56dfd8d56fc.png',
                'order' => '2',
                'apartment_id' => '10',
            ),
            17 => 
            array (
                'id' => '81',
                'filename' => 'apartment_5d56e0c68b3d8.png',
                'order' => '0',
                'apartment_id' => '9',
            ),
            18 => 
            array (
                'id' => '82',
                'filename' => 'apartment_5d56e0c7c365c.png',
                'order' => '1',
                'apartment_id' => '9',
            ),
            19 => 
            array (
                'id' => '83',
                'filename' => 'apartment_5d56e0c9360c1.png',
                'order' => '2',
                'apartment_id' => '9',
            ),
            20 => 
            array (
                'id' => '84',
                'filename' => 'apartment_5d56e0ca0ee10.png',
                'order' => '3',
                'apartment_id' => '9',
            ),
            21 => 
            array (
                'id' => '107',
                'filename' => 'apartment_5d56dfb5b0af1.png',
                'order' => '2',
                'apartment_id' => '14',
            ),
            22 => 
            array (
                'id' => '125',
                'filename' => 'apartment_5d56dfb2dedfa.png',
                'order' => '0',
                'apartment_id' => '16',
            ),
            23 => 
            array (
                'id' => '135',
                'filename' => 'apartment_5d56ea1105841.png',
                'order' => '0',
                'apartment_id' => '14',
            ),
            24 => 
            array (
                'id' => '150',
                'filename' => 'apartment_5d56ed19510c2.png',
                'order' => '1',
                'apartment_id' => '10',
            ),
            25 => 
            array (
                'id' => '152',
                'filename' => 'apartment_5d56edea17ea9.png',
                'order' => '0',
                'apartment_id' => '16',
            ),
            26 => 
            array (
                'id' => '153',
                'filename' => 'apartment_5d56edeb326e5.png',
                'order' => '1',
                'apartment_id' => '16',
            ),
            27 => 
            array (
                'id' => '154',
                'filename' => 'apartment_5d56edebeeb2e.png',
                'order' => '2',
                'apartment_id' => '16',
            ),
            28 => 
            array (
                'id' => '155',
                'filename' => 'apartment_5d56eded11ffd.png',
                'order' => '3',
                'apartment_id' => '16',
            ),
            29 => 
            array (
                'id' => '156',
                'filename' => 'apartment_5d56ee7a84496.png',
                'order' => '0',
                'apartment_id' => '9',
            ),
            30 => 
            array (
                'id' => '157',
                'filename' => 'apartment_5d56ee7b3d481.png',
                'order' => '1',
                'apartment_id' => '9',
            ),
            31 => 
            array (
                'id' => '159',
                'filename' => 'apartment_5d56eef214d0f.png',
                'order' => '1',
                'apartment_id' => '10',
            ),
        ));
        
        
    }
}