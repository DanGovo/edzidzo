<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ClassSch;
use Faker\Generator as Faker;

$factory->define(ClassSch::class, function (Faker $faker) {

    return [
        'course_id' => $faker->randomDigitNotNull,
        'class_id' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
