<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\paciente;
use Faker\Generator as Faker;

$factory->define(paciente::class, function (Faker $faker) {

    return [
        'rut_paciente' => $faker->word,
        'nombre_paciente' => $faker->word,
        'direccion' => $faker->word,
        'email' => $faker->word,
        'telefono' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
