<?php

use Faker\Generator as Faker;
use App\ApartmentFeature;
use App\Apartment;
$factory->define(ApartmentFeature::class, function (Faker $faker) {
    return [
        'title'=> $faker->numerify('Feature ##'),
        'value'=> rand(0, 100),
        'type'=> $faker->randomElement(['additional', 'rooms']),
        'apartment_id'=> Apartment::pluck('id')->random()
    ];
});
