<?php

use Faker\Generator as Faker;
use App\Building;

$factory->define(Building::class, function (Faker $faker) {

    $buildingName = $faker->unique()->numerify('Edificio ####');
    return [
      'title'=> $buildingName,
      'slug'=> str_slug($buildingName),
      'address'=> $faker->streetAddress(),
      'url_maps'=> $faker->streetAddress(),
      'from_price'=> $faker->boolean,
      'price'=> $faker->randomNumber(6),
      'description'=> $faker->paragraph( rand(2, 4), true),
      'status'=> $faker->randomElement(['alquiler', 'reservado', 'venta']),
      'is_featured'=> $faker->boolean,
      'contact_name'=> $faker->name,
      'contact_phone'=> $faker->phoneNumber,
    ];
});
