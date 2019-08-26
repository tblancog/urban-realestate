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
                'id' => '34',
                'index' => '0',
                'title' => '',
                'subtitle' => '',
                'link' => '',
                'filename' => 'slide_5d601e6de5974.jpeg',
            ),
            1 => 
            array (
                'id' => '35',
                'index' => '1',
                'title' => '',
                'subtitle' => '',
                'link' => '',
                'filename' => 'slide_5d601e90e66b5.jpeg',
            ),
            2 => 
            array (
                'id' => '36',
                'index' => '3',
                'title' => '',
                'subtitle' => '',
                'link' => '',
                'filename' => 'slide_5d601eb1ce6c0.jpeg',
            ),
            3 => 
            array (
                'id' => '37',
                'index' => '2',
                'title' => '',
                'subtitle' => '',
                'link' => '',
                'filename' => 'slide_5d601f22c783b.jpeg',
            ),
            4 => 
            array (
                'id' => '38',
                'index' => '4',
                'title' => '',
                'subtitle' => '',
                'link' => '',
                'filename' => 'slide_5d601f5dc88ee.jpeg',
            ),
            5 => 
            array (
                'id' => '39',
                'index' => '5',
                'title' => '',
                'subtitle' => '',
                'link' => '',
                'filename' => 'slide_5d601f83df837.jpeg',
            ),
        ));
        
        
    }
}