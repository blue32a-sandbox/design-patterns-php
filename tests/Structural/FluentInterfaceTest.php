<?php

declare(strict_types=1);

namespace Tests\Structural;

use DesignPatterns\Structural\FluentInterface\Sql;
use PHPUnit\Framework\TestCase;

class FluentInterfaceTest extends TestCase
{
    public function testBuildSQL(): void
    {
        $query = (new Sql())
            ->select(['foo', 'bar'])
            ->from('foobar', 'f')
            ->where('f.bar = ?');

        $this->assertSame('SELECT foo, bar FROM foobar AS f WHERE f.bar = ?', (string) $query);
    }
}
