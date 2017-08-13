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
        'lastname' => $faker->lastname,
        'email' => $faker->unique()->safeEmail,
        'role' => $faker->randomElement(['user']),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10)
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker){
  return [
      'name' => $name = $faker->randomElement(['moda', 'tecnologia', 'turismo']),
      'slug' => str_slug($name)
  ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    $title = $faker->name;
    return [
        'title' => $title,
        'slug'  => str_slug($title),
        'description' => implode(' ', $faker->paragraphs(5)),
        'originalprice' => rand(100, 1000),
        'comcomprice' => rand(100, 1000),
        'minimumreservation' => rand(100, 300),
        'duration' => rand(1, 10),
        'image' => 'https://dummyimage.com/300'
    ];
});
