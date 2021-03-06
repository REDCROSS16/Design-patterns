<?php

namespace DesignPatterns\Structural\Composite\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Structural\Composite\Form;
use DesignPatterns\Structural\Composite\InputElement;
use DesignPatterns\Structural\Composite\TextElement;

class CompositeTest extends TestCase
{
    public function testRender () 
    {
        $form = new Form();
        $form->addElement(new TextElement('Email'));
        $form->addElement(new InputElement());

        $embed = new Form();
        $embed->addElement(new TextElement('Password'));
        $embed->addElement(new InputElement());
        $form->addElement($embed);

        $this->assertSame('<form>Email<input type="text" /><form>Password<input type="text" /></form>', $form->render());
    }
}