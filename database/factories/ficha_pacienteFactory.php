<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ficha_paciente;
use Faker\Generator as Faker;

$factory->define(ficha_paciente::class, function (Faker $faker) {

    return [
        'fk_paciente' => $faker->randomDigitNotNull,
        'fecha' => $faker->word,
        'hora_inicio' => $faker->word,
        'doctor' => $faker->word,
        'especialidad' => $faker->word,
        'diagnostico' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
