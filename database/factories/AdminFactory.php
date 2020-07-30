<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;


$factory->define(Admin::class, function (Faker $faker) {
    return [
        'name'      =>  $faker->name,
        'email'     =>  $faker->unique()->safeEmail,
        'password'  =>   Hash::make('admin123')
    ];
});
