<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MinkTest extends WebTestCase
{
    private $session;

    public function setUp()
    {
        $client = self::createClient();

        $driver = new \Behat\Mink\Driver\BrowserKitDriver($client);
        $this->session = new \Behat\Mink\Session($driver);
        $this->session->start();
    }

    public function testIndex()
    {
        $this->session->visit('/');
        $content = $this->session->getPage()->getContent();

        $this->assertContains('Welcome to Symfony', strip_tags($content));
    }
}
