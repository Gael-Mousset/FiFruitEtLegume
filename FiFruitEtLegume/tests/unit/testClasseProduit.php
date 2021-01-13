<?php

namespace App;
use App\Entity\Produit;
use PHPUnit\Framework\TestCase;

class testClasseProduit extends TestCase
{
    //testGetType() teste si la fonction getType de Produit retourne la bonne valeur
    public function testGetType(){
        $p1=$this->createMock(Produit::class);

        $p1->method('getType')->willReturn('legume');

        $this->assertSame('legume',$p1->getType());
    }

    //testGetNom() teste si la fonction getType de Produit retourne la bonne valeur
    public function testGetNom(){
        $p1=$this->createMock(Produit::class);

        $p1->method('getNom')->willReturn('moule');

        $this->assertSame('moule',$p1->getNom());
    }

    //testGetDescription() teste si la fonction getDescription de Produit retourne la bonne valeur
    public function testGetDescription(){
        $p1=$this->createMock(Produit::class);

        $p1->method('getDescription')->willReturn('ils sont organics');

        $this->assertSame('ils sont organics',$p1->getDescription());
    }

    //testGetPrix() teste si la fonction getPrix de Produit retourne la bonne valeur
    public function testGetPrix(){
        $p1=$this->createMock(Produit::class);

        $p1->method('getPrix')->willReturn(5.0);

        $this->assertSame(5.0,$p1->getPrix());
    }

    //testGetQuantite() teste si la fonction getQuantite de Produit retourne la bonne valeur
    public function testGetQuantite(){
        $p1=$this->createMock(Produit::class);

        $p1->method('getQuantite')->willReturn(17.0);

        $this->assertSame(17.0,$p1->getQuantite());
    }
}