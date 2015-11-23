<?php
namespace AppBundle\Tests;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
class StudentControllerTest extends WebTestCase
{
    public function test_it_lists_students()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/student');
        
        $this->assertContains('Jean Dupont', $client->getResponse()->getContent());
    }
}
