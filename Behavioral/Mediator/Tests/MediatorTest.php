<?php

namespace DesignPatterns\Behavioral\Mediator;

class MediatorTest extends TestCase 
{
    public function testOutputHelloWorld()
    {
        $mediator = new UserRepositoryUiMediator(new UserRepository(), new Ui());

        $this->expectOutputString('User: Dominik');
        $mediator->printInfoAbout('Dominik');
    }
}