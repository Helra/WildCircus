<?php

namespace App\DataFixtures;

use App\Entity\Spectacle;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;

class SpectacleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');
        for ($i = 0; $i < 20; $i++) {
            $spectacle = new Spectacle();
            $spectacle->setName($faker->firstName);
            $spectacle->setPresentation($faker->paragraph(2));
            $spectacle->setImage($faker->imageUrl());
            $spectacle->setPrice($faker->randomFloat());
            $this->addReference('spectacle_' . $i, $spectacle);
            $manager->persist($spectacle);
        }
        $manager->flush();
    }
}
