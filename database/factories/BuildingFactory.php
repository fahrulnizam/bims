<?php

use Faker\Generator as Faker;

$factory->define(App\Building::class, function (Faker $faker) {

	$building_group = DB::table('building_group')->select()->orderByRaw('RAND()')->first();
	$state = DB::table('state')->select()->orderByRaw('RAND()')->first();

    return [
    	'building_id' => $faker->unique()->numberBetween($min = 1000, $max = 100000000),
    	'service_number' => $faker->unique()->numberBetween($min = 1000, $max = 100000000),
    	'building_group' => $building_group->id,
        'name' => str_random(3),
        'description' => $faker->paragraph,
        'status' => $faker->numberBetween($min = 0, $max = 1),
        'state' => $state->id
    ];
});
