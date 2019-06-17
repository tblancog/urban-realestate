<?php

use Faker\Generator as Faker;
use App\Building;
use App\Apartment;

$factory->define(Apartment::class, function (Faker $faker) {

    $apartmentName = $faker->unique()->numerify('Departamento ####');
    return [
      'title'=> $apartmentName,
      'slug'=> str_slug($apartmentName),
      'address'=> $faker->streetAddress(),
      'image_name'=> '',
      'url_maps'=> $faker->streetAddress(),
      'from_price'=> $faker->boolean,
      'price'=> $faker->randomNumber(6),
      'description'=> $faker->paragraph(2),
      'status'=> 'venta',
      'is_featured'=> $faker->boolean,
      'contact_name'=> $faker->name,
      'contact_phone'=> $faker->phoneNumber,
      'building_id'=> Building::pluck('id')->random()
    ];
});
