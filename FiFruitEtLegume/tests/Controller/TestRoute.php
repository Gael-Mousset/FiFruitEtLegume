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
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testRouteDetailProducteur()
    {
        $client = static::createClient();
        $client->request('GET', '/producteur/1');
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
        $client->request('GET', '/produit/1');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
