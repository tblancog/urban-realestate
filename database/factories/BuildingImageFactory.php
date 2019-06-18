<?php

use Faker\Generator as Faker;
use App\Building;
use App\BuildingImage;

$factory->define(BuildingImage::class, function (Faker $faker) {
    return [
      'filename'=> 'building_'.rand(1, 8).'.jpg',
      'order'=> rand(1, 8),
      'building_id'=> Building::pluck('id')->random(),
      'is_placeholder'=> true
    ];
});
