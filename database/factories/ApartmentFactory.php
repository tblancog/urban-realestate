<?php

use Faker\Generator as Faker;
use App\Building;
use App\Apartment;

$factory->define(Apartment::class, function (Faker $faker) {

    $apartmentName = $faker->unique()->numerify('Departamento ####');
    return [
      'title'=> $apartmentName,
      'slug'=> str_slug($apartmentName),

      'floor'=> rand(0, 10),
      'department'=> rand(1, 4),
      'code'=> '#'.rand(1, 1000),

      'price'=> $faker->randomNumber(6),
      'area'=> rand(30, 60),
      'rooms'=> rand(1, 4),

      'description'=> $faker->paragraph(2),
      'status'=> $faker->randomElement(['alquiler', 'reservado', 'venta']),
      'contact_name'=> $faker->name,
      'contact_phone'=> $faker->phoneNumber,
      'building_id'=> Building::pluck('id')->random()
    ];
});
