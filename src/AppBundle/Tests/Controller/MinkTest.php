<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class MinkTest extends KernelTestCase
{
    private $session;

    public function setUp()
    {
        $this->baseUrl = 'http://localhost:8000';

        $driver = new \Behat\Mink\Driver\GoutteDriver();
        $this->session = new \Behat\Mink\Session($driver);
    }

    public function testIndex()
    {
        $this->session->visit($this->baseUrl . '/');
        $content = $this->session->getPage()->getContent();

        $this->assertContains('Welcome to Symfony', strip_tags($content));
    }
}
