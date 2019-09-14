<?php

use Faker\Generator as Faker;
use App\Article;

$factory->define(Article::class, function (Faker $faker) {
    $title = $faker->unique()->numerify('Article ####');
    return [
        'title'=> $title,
        'slug'=> str_slug($title),
        'description'=> $faker->paragraph( rand(2, 4) , true)
    ];
});
