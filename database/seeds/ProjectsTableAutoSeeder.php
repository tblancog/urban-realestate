<?php

use Illuminate\Database\Seeder;

class ProjectsTableAutoSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects')->delete();
        
        \DB::table('projects')->insert(array (
            0 => 
            array (
                'id' => '1',
                'project_name' => 'Project 3418',
                'slug' => 'project-3418',
                'year' => '2017',
                'location' => '8693 O\'Conner Parkway Apt. 678',
                'services' => '258 Hellen Court',
                'description' => 'Explicabo et consequatur neque placeat totam earum fuga. Eum deleniti repellendus aut laudantium. Nobis voluptas sed reprehenderit odio dolor velit dolor dolorem.',
                'created_at' => '2019-09-07 10:15:56',
                'updated_at' => '2019-09-07 10:15:56',
            ),
            1 => 
            array (
                'id' => '2',
                'project_name' => 'Project 7346',
                'slug' => 'project-7346',
                'year' => '2018',
                'location' => '5262 Carey Orchard',
                'services' => '8161 Lukas Key Suite 840',
                'description' => 'Dolore temporibus error quae est. Atque saepe quia inventore sunt ut.',
                'created_at' => '2019-09-07 10:15:56',
                'updated_at' => '2019-09-07 10:15:56',
            ),
            2 => 
            array (
                'id' => '24',
                'project_name' => 'Project 7000',
                'slug' => 'project-7000',
                'year' => '2017',
                'location' => '7613 Wilton Hollow',
                'services' => '3514 Fahey Bypass',
                'description' => 'Et est magni tempora aspernatur perferendis sit. Voluptates voluptatum minus nihil tenetur distinctio beatae qui. Nemo quam animi voluptates eos enim.',
                'created_at' => '2019-09-08 00:30:56',
                'updated_at' => '2019-09-08 00:30:56',
            ),
            3 => 
            array (
                'id' => '25',
                'project_name' => 'Project 5184',
                'slug' => 'project-5184',
                'year' => '2017',
                'location' => '8522 Lexus Ports Suite 452',
                'services' => '654 Bogisich Place',
                'description' => 'Deleniti recusandae ad fugiat quisquam. Amet vel ea a modi molestiae asperiores. Quisquam pariatur facere odit ducimus delectus nesciunt laboriosam delectus.',
                'created_at' => '2019-09-08 00:30:56',
                'updated_at' => '2019-09-08 00:30:56',
            ),
            4 => 
            array (
                'id' => '26',
                'project_name' => 'Project 8885',
                'slug' => 'project-8885',
                'year' => '2017',
                'location' => '831 Bruen River Suite 768',
                'services' => '57066 Orrin Mount Suite 104',
                'description' => 'Nam repellat aperiam laboriosam ut itaque amet. Atque qui aut illo nihil aut incidunt voluptatem. Et consectetur suscipit qui illum voluptatem consequatur.',
                'created_at' => '2019-09-08 00:30:56',
                'updated_at' => '2019-09-08 00:30:56',
            ),
            5 => 
            array (
                'id' => '27',
                'project_name' => 'Project 9811',
                'slug' => 'project-9811',
                'year' => '2017',
                'location' => '15051 Streich Bridge Suite 120',
                'services' => '785 Arlie Bridge Suite 315',
                'description' => 'Aut eum nisi veniam non voluptatem quia. Quibusdam maxime ducimus culpa similique dolores odit.',
                'created_at' => '2019-09-08 00:30:56',
                'updated_at' => '2019-09-08 00:30:56',
            ),
            6 => 
            array (
                'id' => '28',
                'project_name' => 'Project 2325',
                'slug' => 'project-2325',
                'year' => '2018',
                'location' => '5888 Gorczany Station Apt. 124',
                'services' => '601 Bergnaum Land',
                'description' => 'Architecto consectetur vel id maiores voluptatem pariatur vero non. Dolores sed magnam eum adipisci eos rerum nulla ab. Inventore molestiae sit rerum corporis adipisci esse deleniti. Aliquam quia nihil molestias et. Et quibusdam sunt qui sed quo explicabo consectetur.',
                'created_at' => '2019-09-08 00:30:56',
                'updated_at' => '2019-09-08 00:30:56',
            ),
            7 => 
            array (
                'id' => '29',
                'project_name' => 'Project 3318',
                'slug' => 'project-3318',
                'year' => '2018',
                'location' => '2251 Barrows Motorway Suite 024',
                'services' => '525 Schneider Manor',
                'description' => 'Voluptas doloremque ea aut aperiam. Incidunt maiores et corrupti eaque qui quo architecto.',
                'created_at' => '2019-09-08 00:30:56',
                'updated_at' => '2019-09-08 00:30:56',
            ),
            8 => 
            array (
                'id' => '30',
                'project_name' => 'test',
                'slug' => 'test',
                'year' => '33',
                'location' => 'fsd',
                'services' => 'd',
                'description' => 'fsd',
                'created_at' => '2019-09-12 17:36:56',
                'updated_at' => '2019-09-12 17:36:56',
            ),
        ));
        
        
    }
}