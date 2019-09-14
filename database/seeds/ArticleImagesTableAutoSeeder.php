<?php

use Illuminate\Database\Seeder;

class ArticleImagesTableAutoSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('article_images')->delete();
        
        
        
    }
}