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

$factory->define(App\Martyr::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'force' => $faker->randomElement($array = array ('INS','Air Force','BSF', 'MARCOS', 'BSF', 'CPRF')),
        'martyr_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'city' => $faker->city,
        'photo_path' => 'assets/blank_profile.png',
        'accepting_status' => true,
        'family_mems' => $faker->numberBetween( $min = 1, $max = 9),
        'total_donations' => $faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 100000),
        'bank_name' => 'SBI',
        'account_no' => '1234567890',
        'ifsc_code' => 'SBIN10002'

    ];
});