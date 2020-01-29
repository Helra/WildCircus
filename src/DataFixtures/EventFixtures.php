<?php

namespace App\DataFixtures;

use App\Entity\Event;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;

class EventFixtures extends Fixture implements DependentFixtureInterface
{


    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');
        for ($i = 0; $i < 20; $i++) {
            $spectacle = $this->getReference('spectacle_' . rand(0, 19));
            $event = new Event();
            $event->setCity($faker->name);
            $event->setDatetime($faker->dateTimeBetween('now', '+1 years'));
            $event->setSpectacle($spectacle);
            $manager->persist($event);
        }
        $manager->flush();
    }

    /** This method must return an array of fixtures classes
     * on which the implementing class depends on
     *
     * @return class-string[]
     */
    public function getDependencies()
    {
        return [ SpectacleFixtures::class];
    }
}
