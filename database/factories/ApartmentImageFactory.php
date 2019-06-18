<?php

use Faker\Generator as Faker;
use App\Apartment;
use App\ApartmentImage;

$factory->define(ApartmentImage::class, function (Faker $faker) {
    return [
      'filename'=> 'building_'.rand(1, 8).'.jpg',
      'path'=> '/images/uploads/',
      'order'=> rand(1, 8),
      'apartment_id'=> Apartment::pluck('id')->random()
    ];
});
