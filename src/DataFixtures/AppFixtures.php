<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();

        $faker = Factory::create('en_US');

        $user
            ->setFirstname($faker->firstName)
            ->setLastname($faker->lastName)
            ->setEmail($faker->email);

        $manager->persist($user);

        $manager->flush();
    }
}
