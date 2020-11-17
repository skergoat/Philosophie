<?php

namespace App\DataFixtures;

use App\Entity\Test;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $test = new Test();
        $test->setName('Stéphane');
        $test->setDescription('Je suis developpeur web');

        $manager->persist($test);
        $manager->flush();
    }
}
