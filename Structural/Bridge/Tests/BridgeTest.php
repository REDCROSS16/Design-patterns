<?php

use DesignPatterns\Structural\Bridge\HtmlFormatter;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testCanPrintUsingThePlainTextFormatter()
    {
        $service = new HelloWorldService(new PlainTextFormatter());

        $this->assertSame('Hello world', $service->get());
    }

    public function testCanPrintUsingTheHtmlFormatter()
    {
        $service = new HelloWorldService(new HtmlFormatter());

        $this->assertSame('<p>Hello world</p>', $service->get());
    }

}