<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Prototype;

/**
 * Concrete Prototype
 */
class BarBookPrototype extends BookPrototype
{
    protected string $category = 'Bar';

    public function __clone()
    {
    }
}
