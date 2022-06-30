<?php

namespace DesignPatterns\Behavioral\Visitor\Tests;

use DesignPatterns\Behavioral\Visitor\RecordingVisitor;
use DesignPatterns\Behavioral\Visitor\User;
use DesignPatterns\Behavioral\Visitor\Group;
use DesignPatterns\Behavioral\Visitor\Role;
use DesignPatterns\Behavioral\Visitor;

class VisitorTest extends TestCase
{
    private RecordingVisitor $visitor;

    public function setUp(): void
    {
        $this->visitor = new RecordingVisitor();
    }

    public function provideRoles()
    {
        return [
            [new User('Dominik')],
            [new Group('Administrators')]
        ];
    }

    public function testVisitSomeRole(Role $role)
    {
        $role->accept($this->visitor);
        $this->assertSame($role, $this->visitor->getVisited()[0]);
    }
}