<?php

use Illuminate\Database\Seeder;

class HouseImagesTableAutoSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('house_images')->delete();
        
        \DB::table('house_images')->insert(array (
            0 => 
            array (
                'id' => '1',
                'filename' => 'house_5d73adfc1cb9b.jpg',
                'order' => '0',
                'house_id' => '1',
            ),
            1 => 
            array (
                'id' => '2',
                'filename' => 'house_5d73adfc35828.jpg',
                'order' => '1',
                'house_id' => '1',
            ),
            2 => 
            array (
                'id' => '3',
                'filename' => 'house_5d73ae088e7d5.jpeg',
                'order' => '0',
                'house_id' => '2',
            ),
            3 => 
            array (
                'id' => '4',
                'filename' => 'house_5d73ae08ab982.jpeg',
                'order' => '1',
                'house_id' => '2',
            ),
            4 => 
            array (
                'id' => '5',
                'filename' => 'house_5d73ae1b41dad.jpg',
                'order' => '0',
                'house_id' => '3',
            ),
            5 => 
            array (
                'id' => '6',
                'filename' => 'house_5d73ae1b5a536.jpg',
                'order' => '1',
                'house_id' => '3',
            ),
            6 => 
            array (
                'id' => '7',
                'filename' => 'house_5d73ae1b6e438.jpg',
                'order' => '2',
                'house_id' => '3',
            ),
        ));
        
        
    }
}