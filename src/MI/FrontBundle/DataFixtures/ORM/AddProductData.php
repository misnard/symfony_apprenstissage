<?php

namespace MI\FrontBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MI\FrontBundle\Entity\Articles;

class AddProductData implements FixtureInterface
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        // Liste des noms de catégorie à ajouter
        $names = array(
            'produit 1',
            'produit 2',
            'produit 3',
            'produit 4',
            'produit 5',
            'produit 6',
            'produit 7'
        );

        foreach ($names as $name) {
            // On crée la catégorie
            $prod = new Articles();
            $prod->setName($name);
            $prod->setPrice(rand(100, 500));
            $prod->setPicture("assets/images/shop-item-01.jpg");
            $prod->setDescription("Lorem lorem lorem");
            // On la persiste
            $manager->persist($prod);
        }
        // On déclenche l'enregistrement de toutes les catégories
        $manager->flush();
    }
}