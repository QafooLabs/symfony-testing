<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/lajsfdsadfj');

        try {
            $crawler->filter('#nicht_existent')->text();
        } catch (\InvalidArgumentException $e) {
            var_dump(trim($crawler->filter('.text-exception h1')->text()));
        }

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Welcome to Symfony', $crawler->filter('#container h1')->text());
    }
}
