<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\ORM\Link::class, function (Faker $faker) {
    return [
        'key'         => $faker->md5,
        'url'         => $faker->url,
        'ogp_url'     => $faker->url,
        'description' => $faker->realText(150),
        'name'        => $faker->name,
        'title'       => $faker->word,
        'created_at'  => date('Y-m-d H:i:s'),
        'updated_at'  => date('Y-m-d H:i:s'),
    ];
});
