<?php
require_once '../../../vendor/autoload.php';

/**
 * @return string
 */
function nameFaker()
{
    $faker = Faker\Factory::create();

    return $faker->firstName();
}

function positionFaker(int $max = 10)
{

    $faker = Faker\Factory::create();

    return $faker->numberBetween(0, $max);
}

function typeSupportFaker()
{

    $faker = Faker\Factory::create();

    return $faker->numberBetween(4,6);


}

function typeOffensiveFaker()
{

    $faker = Faker\Factory::create();

    return $faker->numberBetween(1,3);


}


