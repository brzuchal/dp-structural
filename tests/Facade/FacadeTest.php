<?php

namespace Structural\Tests\Facade;

use PHPUnit\Framework\TestCase;
use Structural\Facade\Bios;
use Structural\Facade\ComputerFacade;
use Structural\Facade\OperatingSystem;

class FacadeTest extends TestCase
{
    public function testComputerOn(): void
    {
        $os = $this->createMock(OperatingSystem::class);
        $os->method('getName')
            ->will($this->returnValue('Linux'));

        $bios = $this->createMock(Bios::class);
        $bios->method('launch')
            ->with($os);

        $facade = new ComputerFacade($bios, $os);
        $facade->turnOn();

        $this->assertSame('Linux', $os->getName());
    }
}
