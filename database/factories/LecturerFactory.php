<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Lecturer;
use Faker\Generator as Faker;

$factory->define(Lecturer::class, function (Faker $faker) {

    return [
        'firstname' => $faker->word,
        'surname' => $faker->word,
        'dob' => $faker->word,
        'gender' => $faker->word,
        'email' => $faker->word,
        'phone' => $faker->word,
        'home_address' => $faker->text,
        'nationality' => $faker->word,
        'id_number' => $faker->word,
        'passport_number' => $faker->word,
        'status' => $faker->word,
        'date_registered' => $faker->word,
        'user_id' => $faker->randomDigitNotNull,
        'image' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
