<?php

use Faker\Generator as Faker;
use App\Image;
use App\Building;

$factory->define(Image::class, function (Faker $faker) {
    return [
      'filename'=> 'building_'.rand(1, 8).'.jpg',
      'path'=> '/images/uploads/',
      'order'=> rand(1, 8),
      'building_id'=> Building::pluck('id')->random()
    ];
});
