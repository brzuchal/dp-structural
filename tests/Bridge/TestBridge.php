<?php


namespace Structural\Tests\Bridge;


use PHPUnit\Framework\TestCase;
use Structural\Bridge\ButtonPress;
use Structural\Bridge\Runner;
use Structural\Bridge\UseRemote;


class BridgeTest extends TestCase
{
    public function testVariousSwitcher()
    {

        $runner = new Runner(new UseRemote());
        $this->assertEquals('Run by:  remote', $runner->performAction());

        $runner->setImplementation(new ButtonPress());
        $this->assertEquals('Run by:  button', $runner->performAction());
    }
}
