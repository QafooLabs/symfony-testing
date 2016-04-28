<?php

namespace AppBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Client;

class UsefulClient extends Client
{
    public function request($method, $uri, array $parameters = array(), array $files = array(), array $server = array(), $content = null, $changeHistory = true)
    {
        $crawler = parent::request($method, $uri, $parameters, $files, $server, $content, $changeHistory);

        if ($crawler->filter('.text-exception h1')->count() > 0) {
            throw new \RuntimeException(trim($crawler->filter('.text-exception h1')->text()));
        }

        return $crawler;
    }
}
