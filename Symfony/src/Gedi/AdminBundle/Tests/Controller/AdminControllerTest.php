<?php

namespace Gedi\AdminBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdminControllerTest extends WebTestCase
{
    public function testHome()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/home_admin');
    }

    public function testUsers()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/users_admin');
    }

    public function testGroups()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/groups_admin');
    }

    public function testProjects()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/projects_admin');
    }

    public function testDocuments()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/docs_admin');
    }

}
