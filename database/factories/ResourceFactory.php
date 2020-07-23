<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Resource;
use App\Models\ResourceType;
use Faker\Generator as Faker;

$factory->define(Resource::class, function (Faker $faker) {
    return [
        "name" => "Iron ingot",
        "img" => $faker->imageUrl(640, 480),
        "resource_type_id" => ResourceType::first()->id,
    ];
});
