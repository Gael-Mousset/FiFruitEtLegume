<?php

namespace App\DataFixtures;


use App\Entity\Producteur;
use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $Producteur1=new Producteur();
        $Producteur1->setPrenom('Mathis');
        $Producteur1->setNom('Hamelotte');
        $Producteur1->setNomDeLEntreprise('PetitPotager');
        $Producteur1->setDescription('jeune producteur, je souhaite vous faire découvrir ma passion à l"aide de mes produits cultivers avec soins.');
        $Producteur1->setAdresse('3 rue des accacias, 17430 Saint-Hippolyte');
        $Producteur1->setTelephone('0662378055');
        $Producteur1->setPhoto('mathis');
        
        $manager->persist($Producteur1);

        $Producteur2= new Producteur();
        $Producteur2->setPrenom('Romain');
        $Producteur2->setNom('Durieux');
        $Producteur2->setNomDeLEntreprise('FiFruit');
        $Producteur2->setDescription('salut c"est Romain. salut c"est Romain. salut c"est Romain. salut c"est Romain. salut c"est Romain. salut c"est Romain. salut c"est Romain. salut c"est Romain. ');
        $Producteur2->setAdresse('6 rue des fifruit, 17000 La Rochelle');
        $Producteur2->setTelephone('0600000001');
        $Producteur2->setPhoto('fruits-legumes.png');

        $manager->persist($Producteur2);

        $Producteur3=new Producteur();
        $Producteur3->setPrenom('Phillipe');
        $Producteur3->setNom('Roux');
        $Producteur3->setNomDeLEntreprise('FiLegume');
        $Producteur3->setDescription('Aucune description');
        $Producteur3->setAdresse('9 rue des filegume, 17300 Rochefort');
        $Producteur3->setTelephone('0600000002');
        $Producteur3->setPhoto('https://www.sante-sur-le-net.com/wp-content/uploads/2018/07/fraise-sante.jpg');

        $manager->persist($Producteur3);

        $Producteur4=new Producteur();
        $Producteur4->setPrenom('Gael');
        $Producteur4->setNom('Mousset');
        $Producteur4->setNomDeLEntreprise('Pitager');
        $Producteur4->setDescription('Aucune description');
        $Producteur4->setAdresse('8 rue Charles de Gaulle, 17440 Aytré');
        $Producteur4->setTelephone('0600000003');
        $Producteur4->setPhoto('grathis');

        $manager->persist($Producteur4);

        $Producteur5=new Producteur();
        $Producteur5->setPrenom('Nhan');
        $Producteur5->setNom('HO Dinh Huu');
        $Producteur5->setNomDeLEntreprise('Potiger');
        $Producteur5->setDescription('Aucune description');
        $Producteur5->setAdresse('8 rue Louis Pasteur, 17320 Marenne');
        $Producteur5->setTelephone('0600000004');
        $Producteur5->setPhoto('grathis');

        $manager->persist($Producteur5);

        $Producteur6=new Producteur();
        $Producteur6->setPrenom('Lea');
        $Producteur6->setNom('Bisot');
        $Producteur6->setNomDeLEntreprise('Fique');
        $Producteur6->setDescription('Aucune description');
        $Producteur6->setAdresse('3 rue des accacias, 17200 Royan');
        $Producteur6->setTelephone('0600000005');
        $Producteur6->setPhoto('grathis');

        $manager->persist($Producteur6);

        $Producteur7=new Producteur();
        $Producteur7->setPrenom('julie');
        $Producteur7->setNom('Bouchet');
        $Producteur7->setNomDeLEntreprise('LaVache');
        $Producteur7->setDescription('Aucune description');
        $Producteur7->setAdresse('3 rue des accacias, 17100 Sainte');
        $Producteur7->setTelephone('0600000006');
        $Producteur7->setPhoto('grathis');

        $manager->persist($Producteur7);

        $Producteur8=new Producteur();
        $Producteur8->setPrenom('Matthieu');
        $Producteur8->setNom('Decroix');
        $Producteur8->setNomDeLEntreprise('BioUnivers');
        $Producteur8->setDescription('Aucune description');
        $Producteur8->setAdresse('3 rue Jules Ferry, 17430 Tonnay-Charente');
        $Producteur8->setTelephone('0600000007');
        $Producteur8->setPhoto('grathis');

        $manager->persist($Producteur8);

        $Producteur9=new Producteur();
        $Producteur9->setPrenom('Jean');
        $Producteur9->setNom('Neveu');
        $Producteur9->setNomDeLEntreprise('Restaurant Ambroisia');
        $Producteur9->setDescription('Aucune description');
        $Producteur9->setAdresse('17 Avenue Charles de Gaulle, 17450 Fouras');
        $Producteur9->setTelephone('0600000008');
        $Producteur9->setPhoto('grathis');

        $manager->persist($Producteur9);

        $Producteur10=new Producteur();
        $Producteur10->setPrenom('Gaspard');
        $Producteur10->setNom('Dubois');
        $Producteur10->setNomDeLEntreprise('LegumeBio');
        $Producteur10->setDescription('Aucune description');
        $Producteur10->setAdresse('3 rue Léon Gambetta, 17138 Saint-Xandre');
        $Producteur10->setTelephone('0600000009');
        $Producteur10->setPhoto('grathis');

        $manager->persist($Producteur10);

        $Producteur11=new Producteur();
        $Producteur11->setPrenom('Audrey');
        $Producteur11->setNom('Lassalle');
        $Producteur11->setNomDeLEntreprise('FruitBio');
        $Producteur11->setDescription('Aucune description');
        $Producteur11->setAdresse('3 rue Victor Hugo, 17620 Echillais');
        $Producteur11->setTelephone('0600000010');
        $Producteur11->setPhoto('grathis');

        $manager->persist($Producteur11);



        //produit
        $Produit1=new Produit();
        $Produit1->setNom('Carotte');
        $Produit1->setDescription('Carotte cultiver dans mon potager');
        $Produit1->setType('legume');
        $Produit1->setQuantite('12');
        $Produit1->setPrix('3');
        $Produit1->setPhoto('carot.png');
        $Produit1->setProducteur($Producteur1);

        $manager->persist($Produit1);

        $Produit2=new Produit();
        $Produit2->setNom('concombre');
        $Produit2->setDescription('Aucune description');
        $Produit2->setType('legume');
        $Produit2->setQuantite('13');
        $Produit2->setPrix('5');
        $Produit2->setPhoto('https://img-3.journaldesfemmes.fr/ov22esa_6QehxsFs7mi2QtdfFOE=/910x607/smart/46dbda9272fb4f74bb89fda8c58f61b1/ccmcms-jdf/10659242.jpg');
        $Produit2->setProducteur($Producteur1);

        $manager->persist($Produit2);

        $Produit3=new Produit();
        $Produit3->setNom('oignon rouge');
        $Produit3->setDescription('Aucune description');
        $Produit3->setType('legume');
        $Produit3->setQuantite('5');
        $Produit3->setPrix('5');
        $Produit3->setPhoto('grathis');
        $Produit3->setProducteur($Producteur1);

        $manager->persist($Produit3);

        $Produit4=new Produit();
        $Produit4->setNom('aubergine');
        $Produit4->setDescription('Aucune description');
        $Produit4->setType('legume');
        $Produit4->setQuantite('5');
        $Produit4->setPrix('5');
        $Produit4->setPhoto('https://cdn3.fermedesaintemarthe.com/I-Autre-24902_1200x1200-aubergine-black-beauty-ab.net.jpg');
        $Produit4->setProducteur($Producteur1);

        $manager->persist($Produit4);

        $Produit5=new Produit();
        $Produit5->setNom('fraise');
        $Produit5->setDescription('Aucune description');
        $Produit5->setType('fruit');
        $Produit5->setQuantite('9');
        $Produit5->setPrix('2');
        $Produit5->setPhoto('https://www.sante-sur-le-net.com/wp-content/uploads/2018/07/fraise-sante.jpg');
        $Produit5->setProducteur($Producteur1);

        $manager->persist($Produit5);

        $Produit6=new Produit();
        $Produit6->setNom('cabillaud');
        $Produit6->setDescription('Aucune description');
        $Produit6->setType('poisson');
        $Produit6->setQuantite('2');
        $Produit6->setPrix('15');
        $Produit6->setPhoto('grathis');
        $Produit6->setProducteur($Producteur2);

        $manager->persist($Produit6);

        $Produit7=new Produit();
        $Produit7->setNom('maquereau');
        $Produit7->setDescription('Aucune description');
        $Produit7->setType('poisson');
        $Produit7->setQuantite('5');
        $Produit7->setPrix('10');
        $Produit7->setPhoto('grathis');
        $Produit7->setProducteur($Producteur2);

        $manager->persist($Produit7);

        $Produit8=new Produit();
        $Produit8->setNom('moule');
        $Produit8->setDescription('Aucune description');
        $Produit8->setType('fruit de mer');
        $Produit8->setQuantite('50');
        $Produit8->setPrix('2');
        $Produit8->setPhoto('grathis');
        $Produit8->setProducteur($Producteur2);

        $manager->persist($Produit8);

        $Produit9=new Produit();
        $Produit9->setNom('huître');
        $Produit9->setDescription('Aucune description');
        $Produit9->setType('fruit de mer');
        $Produit9->setQuantite('12');
        $Produit9->setPrix('5');
        $Produit9->setPhoto('grathis');
        $Produit9->setProducteur($Producteur2);

        $manager->persist($Produit9);

        $Produit10=new Produit();
        $Produit10->setNom('coquille saint-jacques');
        $Produit10->setDescription('Aucune description');
        $Produit10->setType('fruit de mer');
        $Produit10->setQuantite('5');
        $Produit10->setPrix('6');
        $Produit10->setPhoto('grathis');
        $Produit10->setProducteur($Producteur2);

        $manager->persist($Produit10);

        $Produit11=new Produit();
        $Produit11->setNom('saint-nectaire');
        $Produit11->setDescription('Aucune description');
        $Produit11->setType('fromage');
        $Produit11->setQuantite('5');
        $Produit11->setPrix('64');
        $Produit11->setPhoto('https://www.fromagesdelamemee.fr/cache/images/product/0e2b51bbc8d304c86a2a135f09a5ebca-vente-fromage-saint-nectaire-laitier-laqueuille-la-memee-aopdsc_2029-72.jpg');
        $Produit11->setProducteur($Producteur8);

        $manager->persist($Produit11);

        $Produit14=new Produit();
        $Produit14->setNom('reblochon');
        $Produit14->setDescription('Aucune description');
        $Produit14->setType('fromage');
        $Produit14->setQuantite('5');
        $Produit14->setPrix('64');
        $Produit14->setPhoto('https://cdn.shopify.com/s/files/1/0080/6482/7471/products/FromageDeMontagne_Reblochon_L2_aa28d8c0-fc99-4c5d-a2f4-9957bd5fb53a_1024x1024@2x.jpg?v=1557922738');
        $Produit14->setProducteur($Producteur8);

        $manager->persist($Produit14);

        $Produit12=new Produit();
        $Produit12->setNom('chipolatas de poulet');
        $Produit12->setDescription('Aucune description');
        $Produit12->setType('viande');
        $Produit12->setQuantite('5');
        $Produit12->setPrix('64');
        $Produit12->setPhoto('https://pictures.renmans.be/sites/default/files/bddi/images/products/628/BELU-628-PLA-BEFR-374.jpg');
        $Produit12->setProducteur($Producteur7);

        $manager->persist($Produit12);

        $Produit13=new Produit();
        $Produit13->setNom('boudin noir de porc');
        $Produit13->setDescription('Aucune description');
        $Produit13->setType('viande');
        $Produit13->setQuantite('5');
        $Produit13->setPrix('64');
        $Produit13->setPhoto('https://www.concept-epices.fr/Image/5095/800x800/image.jpg');
        $Produit13->setProducteur($Producteur7);

        $manager->persist($Produit13);



        $manager->flush();
    }
}