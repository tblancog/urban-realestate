<?php

use Illuminate\Database\Seeder;
use App\Amenity;
use App\Building;
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
        [ 'title'=> 'cochera', 'icon'=> 'amen_02.png'],
        [ 'title'=> 'piscina', 'icon'=> 'amen_03.png'],
        [ 'title'=> 'gimnasio', 'icon'=> 'amen_08.png'],
        [ 'title'=> 'sum', 'icon'=> 'amen_01.png'],
        [ 'title'=> 'parrilla', 'icon'=> 'amen_05.png'],
        [ 'title'=> 'ascensor', 'icon'=> 'amen_07.png'],
      ];

      Amenity::insert($data);

      Building::all()->each(function($item, $key){
        $item->amenities()->attach(Amenity::all());
      });

    }
}
