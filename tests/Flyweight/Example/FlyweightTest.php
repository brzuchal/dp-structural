<?php


namespace Structural\Tests\Flyweight\Example;

use PHPUnit\Framework\TestCase;
use Structural\Flyweight\Example\FlyweightFactory;


class FlyweightTest extends TestCase
{
    private $avatars = ['Adam', 'Michal', 'Jan', 'Robert', 'Krzystof'];
    private $backgrounds = ['Sky', 'Wood', 'Water'];

    public function testFlyweight()
    {
        $factory = new FlyweightFactory();

        foreach ($this->avatars as $avatar) {
            foreach ($this->backgrounds as $background) {
                $flyweight = $factory->get($avatar);
                $rendered = $flyweight->render($background);

                echo $rendered."\r\n";

                $this->assertEquals(sprintf('Avatar %s with background %s', $avatar, $background), $rendered);
            }
        }

        // Ensure that objects are shared (interface countable)
        $this->assertCount(count($this->avatars), $factory);
    }
}
