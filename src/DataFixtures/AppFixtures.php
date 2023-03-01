<?php

namespace App\DataFixtures;

use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Campaign;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $date = new DateTimeImmutable('2021-05-14');

        $campaign = new Campaign;
        $campaign->setName('Le Sceau de Celebrimbor');
        $campaign->setDescription('Description complète de la campagne');
        $campaign->setCreatedAt($date);
        $manager->persist($campaign);
        $manager->flush();
    }
}
