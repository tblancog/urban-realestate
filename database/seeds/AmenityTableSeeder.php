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
        [ 'title'=> 'cochera', 'icon'=> 'fa-building'],
        [ 'title'=> 'piscina', 'icon'=> 'fa-building'],
        [ 'title'=> 'gimnasio', 'icon'=> 'fa-building'],
        [ 'title'=> 'sum', 'icon'=> 'fa-building'],
        [ 'title'=> 'parrilla', 'icon'=> 'fa-building'],
      ];

      Amenity::insert($data);

    }
}
