<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\productcode;

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(productcode::class, function (Faker $faker) {
    $check=Str::random(4);
    return [
    //  'code' =$faker->unique()
      'code' => $faker->unique()->numerify($check.'####')

    ];
});
