<?php

use Faker\Generator as Faker;
use App\Building;

$factory->define(Building::class, function (Faker $faker) {

    return [
      'title'=> $faker->unique()->numerify('Edificio ####'),
      'address'=> $faker->streetAddress(),
      'url_maps'=> $faker->streetAddress(),
      'from_price'=> $faker->boolean,
      'price'=> $faker->randomNumber(6),
      'description'=> $faker->paragraph(2),
      'status'=> 'en venta',
      'is_featured'=> $faker->boolean,
      'contact_name'=> $faker->name,
      'contact_phone'=> $faker->phoneNumber,
    ];
});
