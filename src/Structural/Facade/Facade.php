<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Facade;

class Facade
{
    public function __construct(private Bios $bios, private OperatingSystem $os)
    {
    }

    public function rurnOn(): void
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
