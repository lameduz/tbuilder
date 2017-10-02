<?php

namespace FrontBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RoomControllerTest extends WebTestCase
{
    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/rooms');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/room');
    }

    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/room/edit');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/room/delete');
    }

}
