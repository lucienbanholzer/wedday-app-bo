<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Quiz extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $quiz = new \App\Entity\Quiz();
        $quiz->setRules("test");
        $manager->persist($quiz);

        $manager->flush();
    }
}
