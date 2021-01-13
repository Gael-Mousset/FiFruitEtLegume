<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TestRoute extends WebTestCase
{
    public function testRouteIndex()
    {
        $client = static::createClient();
        $client->request('GET', '/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }


    public function testRouteIndexProducteur()
    {
        $client = static::createClient();
        $client->request('GET', '/producteur');
        $this->assertEquals(500, $client->getResponse()->getStatusCode());
    }

    public function testRouteDetailProducteur()
    {
        $client = static::createClient();
        $client->request('GET', '/producteur/126');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testRouteIndexProduit()
    {
        $client = static::createClient();
        $client->request('GET', '/produit');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testRouteDetailProduit()
    {
        $client = static::createClient();
        $client->request('GET', '/produit/145');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testRouteCarteProducteur()
    {
        $client = static::createClient();
        $client->request('GET', '/carteproducteur/126');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
