<?php

use Faker\Generator as Faker;
use App\Apartment;
use App\Building;
use App\ApartmentImage;

$factory->define(ApartmentImage::class, function (Faker $faker) {
    return [
      'filename'=> 'department_'.rand(1, 8).'.jpg',
      'order'=> rand(1, 8),
      'apartment_id'=> Building::pluck('id')->random(),
      'is_placeholder'=> true
    ];
});
