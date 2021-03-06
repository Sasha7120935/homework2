<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrderStatus;
use Faker\Generator as Faker;

$factory->define(OrderStatus::class, function ($orderstatuses) {
    return [
        'name' => $orderstatuses
    ];
});
