<?php

use Faker\Generator as Faker;
use App\Project;

$factory->define(Project::class, function (Faker $faker) {

    $houseName = $faker->unique()->numerify('Project ####');
    return [
        'project_name'=> $houseName,
        'slug'=> str_slug($houseName),
        'year'=> $faker->randomElement([2019, 2018, 2017]),
        'location'=> $faker->streetAddress(),
        'services'=> $faker->streetAddress(),
        'description'=> $faker->paragraph( rand(2, 4), true),
    ];
});
