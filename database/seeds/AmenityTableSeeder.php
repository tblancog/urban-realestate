<?php

use Illuminate\Database\Seeder;
use App\Amenity;
class AmenityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
        [ 'title'=> 'Cochera', 'icon'=> 'fa-building'],
        [ 'title'=> 'Piscina', 'icon'=> 'fa-building'],
        [ 'title'=> 'Gimnasio', 'icon'=> 'fa-building'],
        [ 'title'=> 'Sum', 'icon'=> 'fa-building'],
        [ 'title'=> 'Parrilla', 'icon'=> 'fa-building'],
      ];

      Amenity::insert($data);

    }
}
