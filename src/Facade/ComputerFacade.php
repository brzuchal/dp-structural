<?php

namespace Structural\Facade;

class ComputerFacade
{
    public function __construct(
        protected readonly Bios $bios,
        protected readonly OperatingSystem $os,
    ) {
    }

    public function turnOn(): void
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }

    public function turnOff(): void
    {
        $this->os->halt();
        $this->bios->powerDown();
    }
}
