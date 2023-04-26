<?php
namespace App\Tests;

use App\Services\ShowMessage;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ExampleTest extends KernelTestCase
{
    public function testSomething()
    {
        self::bootKernel();
        $container = static::getContainer();
        $message = new ShowMessage();
        $name = 'Hello';
        $response = $message->show($name);

        $this->assertEquals('Hello ' . $name, $response);
    }
}