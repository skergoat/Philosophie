<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $test = new Test();
        $test->setName('Stephane');
        $test->setDescription('Je suis developpeur web');

        $manager->persist($test);
        $manager->flush();
    }
}
