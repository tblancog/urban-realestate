<?php

use Illuminate\Database\Seeder;
use App\Building;
use App\Amenity;
use App\Image;
use App\Apartment;

class BuildingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Building::class, rand(10, 20))->create()
          ->each(function($b){
            $b->amenities()
              ->saveMany( 
                Amenity::inRandomOrder()->take(rand(1,6))->get()
              );
          })->each(function($b){
            $b->images()
              ->saveMany( 
                factory(Image::class, rand(1, 8))->make()
              );
            })->each(function($b){
              $b->apartments()
              ->saveMany(
                factory(Apartment::class, rand(1, 8))->make()
              );
          }
        );
    }
}
