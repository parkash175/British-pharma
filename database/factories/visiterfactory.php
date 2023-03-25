<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Visiter;
use Faker\Generator as Faker;

$factory->define(Visiter::class, function (Faker $faker) {
    return [
        'ip_address' => $faker->ipv4,
    ];
});
