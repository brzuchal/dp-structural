<?php


namespace Structural\Tests\Bridge\Example;


use Structural\Bridge\Example\BlueText;
use Structural\Bridge\Example\UseRemote;
use Structural\Bridge\Example\RedText;
use Structural\Bridge\Example\Runner;
use PHPUnit\Framework\TestCase;


class BridgeTest extends TestCase
{
    public function testVariousColors()
    {
        $runner = new Runner(new BlueText());
        $this->assertEquals('<p style="color: blue">Color me!</p>', $runner->get());

        $runner->setImplementation(new RedText());
        $this->assertEquals('<p style="color: red">Color me!</p>', $runner->get());
    }
}
