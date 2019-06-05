<?php

use Faker\Generator as Faker;
use App\Building;

$factory->define(Building::class, function (Faker $faker) {
    $buildingName = $faker->unique()->numerify('Edificio ####');

    return [
      'title'=> $buildingName,
      'address'=> $faker->streetAddress(),
      'url_maps'=> $faker->streetAddress(),
      'from_price'=> true,
      'price'=> $faker->randomNumber(6),
      'description'=> $faker->paragraph(2),
      'status'=> 'en_venta',
    ];
});
