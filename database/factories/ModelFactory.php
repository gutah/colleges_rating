<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Course::class, function (Faker\Generator $faker) {
    $name = $faker->name;
    return [
      'name' => $name,
      'description' => $faker->text(),
      'slug' => App\Course::setSlug($name)
    ];
});

$factory->define(App\College::class, function (Faker\Generator $faker) {

    $name = $faker->company;
    return [
      'name' => $name,
      'description' => $faker->text(),
      'type' =>rand(0,1),
      'slug' => App\College::setSlug($name),
      'city' => $faker->city,
      'state'=> $faker->state,
      'address' => $faker->address,
      'phone' => $faker->e164PhoneNumber
    ];

});
