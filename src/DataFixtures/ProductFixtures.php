<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Product;


class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager){

        $faker = \Faker\Factory::create('fr_FR');


        for($i = 1; $i <= 12; $i++){
            $product = new Product();

        $description = '<p>' . join($faker->paragraphs(1), '</p><p>') . '</p>';
       

        $product->setName($faker->sentence())
                ->setDescription($description)
                ->setPrix(mt_rand(20, 200))
                ->setCompoEntretien($faker->paragraph(3));

    $manager->persist($product);

        }

    $manager->flush();
    }
}

