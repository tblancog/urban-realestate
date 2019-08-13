<?php

use Illuminate\Database\Seeder;

class SlidersTableAutoSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sliders')->delete();
        
        \DB::table('sliders')->insert(array (
            0 => 
            array (
                'id' => '26',
                'index' => '0',
                'title' => '',
                'subtitle' => '',
                'link' => '',
                'filename' => 'slide_5d47b2c28b127.jpg',
            ),
            1 => 
            array (
                'id' => '27',
                'index' => '1',
                'title' => '',
                'subtitle' => '',
                'link' => '',
                'filename' => 'slide_5d47b2bb4ecba.jpg',
            ),
            2 => 
            array (
                'id' => '28',
                'index' => '2',
                'title' => '',
                'subtitle' => '',
                'link' => '',
                'filename' => 'slide_5d47b2b3789bd.jpg',
            ),
        ));
        
        
    }
}