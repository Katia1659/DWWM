<?php

namespace App\DataFixtures;

use App\Entity\Ingredient;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class AppFixtures extends Fixture
{
    
    public function load(ObjectManager $manager): void
    {

        for ($i=1; $i <= 50 ; $i++) { 
            $ingrediant = new Ingredient();
            $ingrediant->setNom('Ingrediant#' . $i)
                ->setPrix(mt_rand(0, 100));

            $manager->persist($ingrediant);    
        }

              
        
        $manager->flush();
    }
}
