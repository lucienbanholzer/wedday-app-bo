<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Guest extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $guest = new \App\Entity\Guest();
        $guest->setFullname("test");
        $guest->setSurname("test");
        $guest->setCode("test_1");
        $manager->persist($guest);

        $guest = new \App\Entity\Guest();
        $guest->setFullname("test2");
        $guest->setSurname("test2");
        $guest->setCode("test_2");
        $manager->persist($guest);

        $manager->flush();
    }
}
