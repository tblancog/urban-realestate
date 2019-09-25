<?php

use Illuminate\Database\Seeder;

class HousesTableAutoSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('houses')->delete();
        
        \DB::table('houses')->insert(array (
            0 => 
            array (
                'id' => '1',
                'project_name' => 'House 9955',
                'slug' => 'house-9955',
                'year' => '2018',
                'location' => '6679 Clara Park',
                'services' => '266 Champlin Center',
                'description' => 'Architecto ea aut consequatur cupiditate dolor. Libero dignissimos dolore assumenda quas. Enim earum ut culpa sed. Veritatis sit facilis culpa ut.',
                'created_at' => '2019-09-07 10:15:50',
                'updated_at' => '2019-09-07 10:15:50',
            ),
            1 => 
            array (
                'id' => '2',
                'project_name' => 'House 1895',
                'slug' => 'house-1895',
                'year' => '2019',
                'location' => '80753 Hayes Walks Apt. 932',
                'services' => '2226 Runolfsdottir Route',
                'description' => 'Autem doloremque perferendis in sint voluptatem. Doloribus voluptatem rerum earum quasi rerum. Velit sed deleniti rerum dolor officia ex ducimus. Molestiae et rem officiis sint quae ut ut.',
                'created_at' => '2019-09-07 10:15:50',
                'updated_at' => '2019-09-07 10:15:50',
            ),
            2 => 
            array (
                'id' => '3',
                'project_name' => 'House 2579',
                'slug' => 'house-2579',
                'year' => '2018',
                'location' => '86781 Asia Track Apt. 839',
                'services' => '223 Odell Ports Apt. 644',
                'description' => 'Minus eveniet consectetur ad est sed quidem. Dolorem at quis dolorem. Hic doloribus sequi molestiae laborum sint dicta ut rerum.',
                'created_at' => '2019-09-07 10:15:50',
                'updated_at' => '2019-09-07 10:15:50',
            ),
        ));
        
        
    }
}