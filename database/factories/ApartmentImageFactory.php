<?php

use Faker\Generator as Faker;
use App\Apartment;
use App\ApartmentImage;

$factory->define(ApartmentImage::class, function (Faker $faker) {
    return [
      'filename'=> 'apartment_'.rand(1, 8).'.jpg',
      'order'=> rand(1, 8),
      'apartment_id'=> Apartment::pluck('id')->random(),
    ];
});
