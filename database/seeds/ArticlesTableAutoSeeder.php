<?php

use Illuminate\Database\Seeder;

class ArticlesTableAutoSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('articles')->delete();
        
        
        
    }
}