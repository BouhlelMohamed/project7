<?php

namespace App\DataFixtures;

use App\Entity\Phone;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class PhoneFixtures extends Fixture
{
    private $names = ['iPhone', 'Samsung','Nokia'];
    private $colors = ['Red', 'Grey','Black'];

    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <= 20; $i++) {
            $phone = new Phone();
            $phone->setName($this->names[rand(0,2)]. ' ' . rand(5, 8));
            $phone->setColor($this->colors[rand(0,2)]);
            $phone->setPrice(rand(500, 1000));
            $phone->setDescription('Jaime beaucoup les téléphones ');

            $manager->persist($phone);
        }

        $manager->flush();
    }
}
