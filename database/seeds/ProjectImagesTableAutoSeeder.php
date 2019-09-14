<?php

use Illuminate\Database\Seeder;

class ProjectImagesTableAutoSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('project_images')->delete();
        
        \DB::table('project_images')->insert(array (
            0 => 
            array (
                'id' => '1',
                'filename' => 'project_5d73ada36a0a2.jpg',
                'order' => '0',
                'project_id' => '1',
            ),
            1 => 
            array (
                'id' => '2',
                'filename' => 'project_5d73ada3865e3.jpg',
                'order' => '1',
                'project_id' => '1',
            ),
            2 => 
            array (
                'id' => '3',
                'filename' => 'project_5d73ada39e2b0.jpg',
                'order' => '2',
                'project_id' => '1',
            ),
            3 => 
            array (
                'id' => '4',
                'filename' => 'project_5d73adb03ea14.jpg',
                'order' => '0',
                'project_id' => '2',
            ),
            4 => 
            array (
                'id' => '5',
                'filename' => 'project_5d73adb05ca3e.jpg',
                'order' => '1',
                'project_id' => '2',
            ),
            5 => 
            array (
                'id' => '6',
                'filename' => 'project_5d73adc71f1e8.jpg',
                'order' => '0',
                'project_id' => '3',
            ),
            6 => 
            array (
                'id' => '7',
                'filename' => 'project_5d73adc73de09.jpg',
                'order' => '1',
                'project_id' => '3',
            ),
            7 => 
            array (
                'id' => '8',
                'filename' => 'project_5d747f131ea30.jpeg',
                'order' => '0',
                'project_id' => '29',
            ),
            8 => 
            array (
                'id' => '9',
                'filename' => 'project_5d747f133ed37.jpeg',
                'order' => '1',
                'project_id' => '29',
            ),
            9 => 
            array (
                'id' => '10',
                'filename' => 'project_5d747f2025d16.jpg',
                'order' => '0',
                'project_id' => '28',
            ),
            10 => 
            array (
                'id' => '11',
                'filename' => 'project_5d747f203efb7.jpg',
                'order' => '1',
                'project_id' => '28',
            ),
            11 => 
            array (
                'id' => '12',
                'filename' => 'project_5d747f3f4391f.jpg',
                'order' => '0',
                'project_id' => '27',
            ),
            12 => 
            array (
                'id' => '13',
                'filename' => 'project_5d747f3f5b087.jpg',
                'order' => '1',
                'project_id' => '27',
            ),
            13 => 
            array (
                'id' => '14',
                'filename' => 'project_5d747f51ad306.jpg',
                'order' => '0',
                'project_id' => '26',
            ),
            14 => 
            array (
                'id' => '15',
                'filename' => 'project_5d747f743dc7a.jpg',
                'order' => '0',
                'project_id' => '25',
            ),
            15 => 
            array (
                'id' => '16',
                'filename' => 'project_5d747f95b77da.jpg',
                'order' => '0',
                'project_id' => '24',
            ),
            16 => 
            array (
                'id' => '17',
                'filename' => 'project_5d747f95ca142.jpg',
                'order' => '1',
                'project_id' => '24',
            ),
            17 => 
            array (
                'id' => '18',
                'filename' => 'project_5d7aac6928c7b.jpeg',
                'order' => '0',
                'project_id' => '30',
            ),
        ));
        
        
    }
}