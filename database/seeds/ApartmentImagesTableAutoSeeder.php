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
                'id' => '28',
                'filename' => 'apartment_0.jpg',
                'order' => '0',
                'apartment_id' => '3',
            ),
            2 => 
            array (
                'id' => '29',
                'filename' => 'apartment_1.jpg',
                'order' => '1',
                'apartment_id' => '3',
            ),
            3 => 
            array (
                'id' => '30',
                'filename' => 'apartment_2.jpg',
                'order' => '2',
                'apartment_id' => '3',
            ),
            4 => 
            array (
                'id' => '32',
                'filename' => 'apartment_5d47749be4fd5.jpg',
                'order' => '1',
                'apartment_id' => '2',
            ),
            5 => 
            array (
                'id' => '33',
                'filename' => 'apartment_5d47749c0a245.jpg',
                'order' => '2',
                'apartment_id' => '2',
            ),
            6 => 
            array (
                'id' => '34',
                'filename' => 'apartment_5d4c2498f0472.jpg',
                'order' => '0',
                'apartment_id' => '4',
            ),
            7 => 
            array (
                'id' => '35',
                'filename' => 'apartment_5d4c2499b7d08.jpg',
                'order' => '1',
                'apartment_id' => '4',
            ),
            8 => 
            array (
                'id' => '36',
                'filename' => 'apartment_5d4c249a098aa.jpg',
                'order' => '2',
                'apartment_id' => '4',
            ),
            9 => 
            array (
                'id' => '37',
                'filename' => 'apartment_5d4c249a6f3b1.jpg',
                'order' => '3',
                'apartment_id' => '4',
            ),
            10 => 
            array (
                'id' => '38',
                'filename' => 'apartment_5d4c249ab4bc1.jpg',
                'order' => '4',
                'apartment_id' => '4',
            ),
            11 => 
            array (
                'id' => '39',
                'filename' => 'apartment_5d4c24bec9fcf.jpg',
                'order' => '0',
                'apartment_id' => '5',
            ),
            12 => 
            array (
                'id' => '40',
                'filename' => 'apartment_5d4c24bf2ec2a.jpg',
                'order' => '1',
                'apartment_id' => '5',
            ),
            13 => 
            array (
                'id' => '41',
                'filename' => 'apartment_5d4c24bf7427c.jpg',
                'order' => '2',
                'apartment_id' => '5',
            ),
            14 => 
            array (
                'id' => '42',
                'filename' => 'apartment_5d4c24bf9ebc6.jpg',
                'order' => '3',
                'apartment_id' => '5',
            ),
            15 => 
            array (
                'id' => '43',
                'filename' => 'apartment_5d4c24bfe61de.jpg',
                'order' => '4',
                'apartment_id' => '5',
            ),
        ));
        
        
    }
}