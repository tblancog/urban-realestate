<?php

use Faker\Generator as Faker;
use App\Project;

$factory->define(Project::class, function (Faker $faker) {

    $project_name = $faker->unique()->numerify('Project ####');
    return [
        'project_name'=> $project_name,
        'slug'=> str_slug($project_name),
        'year'=> $faker->randomElement([2019, 2018, 2017]),
        'location'=> $faker->streetAddress(),
        'services'=> $faker->streetAddress(),
        'description'=> $faker->paragraph( rand(2, 4), true),
    ];
});
