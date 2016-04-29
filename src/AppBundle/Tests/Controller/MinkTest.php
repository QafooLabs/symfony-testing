<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MinkTest extends WebTestCase
{
    private $session;
    private $container;

    public function setUp()
    {
        $client = self::createClient();
        $this->container = self::$kernel->getContainer();

        $driver = new \Behat\Mink\Driver\BrowserKitDriver($client);
        $this->session = new \Behat\Mink\Session($driver);
        $this->session->start();
        $this->pages = new ApplicationPageObject();
    }

    public function testIndex()
    {
        $this->container->get('profiler')->enable();
        $this->session->visit('/');
        $profile = $this->container->get('profiler')->loadProfile($this->session->getResponseHeadeR('X-Debug-Token'));

        $content = $this->session->getPage()->getContent();

        $elemnts = $this->session->getPage()->find('css', '.selector');

        $this->assertContains('Welcome to Symfony', strip_tags($content));
    }

    public function testHello()
    {
        $this->pages->login('benjamin', 'abcdefg');
        $page = $this->pages->visitHelloPage();

        $this->assertContains('Hello World', $page->getcontent());
    }

    public function testShop()
    {
        $this->pages->addBasket('/tshirt_size_xxl', 10);
        $this->pages->addBasket('/shorts', 1);

        $this->pages->visitBasket()->startCheckout()->enterData([
            'email' => -...
        ])->ordeR();
    }
}

class ApplicationPageObject
{
    private $baseUrl;

    public function __construct()
    {
        $driver = new \Behat\Mink\Driver\BrowserKitDriver($client);
        $this->session = new \Behat\Mink\Session($driver);
        $this->session->start();
    }

    public function visitHelloPage()
    {
        $this->session->visit($this->baseUrl . '/hello');

        return $this->session->getPage();
    }

    public function login($username, $password)
    {
        $this->session->visit($this->baseUrl . '/login');

        $page = $this->session->getPage();
        $page->fillField('username', $username);
        $page->fillField('password', $password);
        $page->pressButton('Login');
    }

    public function addCart($productSlug)
    {
    }

    public function visitBasket()
    {
        return BasketPageObject();
    }
}

class BasketPageObject
{
    public function startCheckout()
    {
    }
}
