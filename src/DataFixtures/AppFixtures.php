<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Role;
use App\Entity\User;
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder){
        $this->encoder = $encoder;
    }
    
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');

        $adminRole = new Role();
        $adminRole->setTitle('ROLE_ADMIN');
        $manager->persist($adminRole);

        $adminUser = new User();
        $adminUser->setFirstName('Kwan')
                  ->setLastName('Gambier')
                  ->setEmail('kwan.g@gmail.com')
                  ->setPicture('https://data.whicdn.com/images/60970610/superthumb.png?t=1368130078')
                  ->setPhoneNumber($faker->phoneNumber)
                  ->setNumber(mt_rand(1, 100))
                  ->setRoadName($faker->streetAddress)
                  ->setZipCode($faker->postcode)
                  ->setCity($faker->city)
                  ->setCountry($faker->country)
                  ->setPassword($this->encoder->encodePassword($adminUser, 'password'))
                  ->addUserRole($adminRole);
                  
        $manager->persist($adminUser);
     
        //les utilisateurs
        $users = [];
        $genres = ['male', 'female'];

        for($i = 1; $i <= 10; $i++){
            $user = new User();
            $genre = $faker->randomElement($genres);
            
            $picture = 'https://randomuser.me/api/portraits/';
            $pictureId = $faker->numberBetween(1,99) . '.jpg'; 

            $picture = $picture . ($genre == 'male' ? 'men/' : 'women/') . $pictureId;

            $password = $this->encoder->encodePassword($user, 'password');

            $user->setFirstName($faker->firstname($genre))
                 ->setLastName($faker->lastname)
                 ->setEmail($faker->email)
                 ->setPicture($picture)
                 ->setPhoneNumber($faker->phoneNumber)
                 ->setNumber(mt_rand(1, 100))
                 ->setRoadName($faker->streetAddress)
                 ->setZipCode($faker->postcode)
                 ->setCity($faker->city)
                 ->setCountry($faker->country)
                 ->setPassword($password);


                
        $manager->persist($user);
        $users[] = $user;
        }
        $manager->flush();

    }
}
