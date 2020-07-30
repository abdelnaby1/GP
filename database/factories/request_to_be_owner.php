<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\request_to_be_owner;
use Faker\Generator as Faker;

$factory->define(request_to_be_owner::class, function (Faker $faker) {
    $owner = factory('App\Owner')->create();
    return [
        'owner_id'  => $owner->id,
        'documents' => $owner->username
    ];
});
