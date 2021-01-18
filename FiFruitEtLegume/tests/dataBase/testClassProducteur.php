<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class testCarteProducteur extends WebTestCase
{
    public function testGetId(){
        $producteur=$this->createMock($Producteur::class);

        $producteur->method('getId')->willReturn(1);

        $this->assertSame(1,$producteur->getId());
    }

    public function testGetNom(){
        $producteur=$this->createMock($Producteur::class);

        $producteur->method('getNom')->willReturn('Hamelotte');

        $this->assertSame('Hamelotte',$producteur->getNom());
    }

    public function testGetPrenom(){
        $producteur=$this->createMock($Producteur::class);

        $producteur->method('getPrenom')->willReturn('mathis');

        $this->assertSame('mathis',$producteur->getPrenom());
    }

    public function testGetNomDeLEntreprise(){
        $producteur=$this->createMock($Producteur::class);

        $producteur->method('getNomDeLEntreprise')->willReturn('entreprise');

        $this->assertSame('entreprise',$producteur->getNomDeLEntreprise());
    }

    public function testGetAdresse(){
        $producteur=$this->createMock($Producteur::class);

        $producteur->method('getAdresse')->willReturn('uneAdresse');

        $this->assertSame('uneAdresse',$producteur->getAdresse());
    }

    public function testGetTelephone(){
        $producteur=$this->createMock($Producteur::class);

        $producteur->method('getTelephone')->willReturn('unNumero');

        $this->assertSame('unNumero',$producteur->getTelephone());
    }

    public function testGetDescription(){
        $producteur=$this->createMock($Producteur::class);

        $producteur->method('getDescription')->willReturn('uneDescription');

        $this->assertSame('uneDescription',$producteur->getDescription());
    }

     public function testGetLat(){
        $producteur=$this->createMock($Producteur::class);

        $producteur->method('getLat')->willReturn(46.3);

        $this->assertSame(46.3,$producteur->getLat());
    }

    public function testGetLng(){
        $producteur=$this->createMock($Producteur::class);

        $producteur->method('getLng')->willReturn(2.03);

        $this->assertSame(2.03,$producteur->getLng());
    }
}


    

}
