<?php

declare(strict_types=1);

namespace Tests\Structural;

use DesignPatterns\Structural\Bridge\HelloWorldService;
use DesignPatterns\Structural\Bridge\HtmlFormatter;
use DesignPatterns\Structural\Bridge\PlainTextFormatter;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testCanPrintUsingThePlainTextFormatter(): void
    {
        $service = new HelloWorldService(new PlainTextFormatter());
        $this->assertSame('Hello World', $service->get());
    }

    public function testCanPrintUsingTheHtmlFormatter(): void
    {
        $service = new HelloWorldService(new HtmlFormatter());
        $this->assertSame('<p>Hello World</p>', $service->get());
    }
}
