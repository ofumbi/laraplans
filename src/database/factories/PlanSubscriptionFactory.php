<?php

use Ofumbi\Laraplans\Models\Plan;
use Ofumbi\Laraplans\Tests\Models\User;
use Ofumbi\Laraplans\Models\PlanSubscription;

$factory->define(PlanSubscription::class, function (Faker\Generator $faker) {
    return [
        'subscribable_id' => factory(User::class)->create()->id,
        'subscribable_type' => User::class,
        'plan_id' => factory(Plan::class)->create()->id,
        'name' => $faker->word
    ];
});
