<?php

namespace DesignPatterns\Behavioral\Memento\Tests;

use DesignPatterns\Behavioral\Memento\State;
use DesignPatterns\Behavioral\Memento\Ticket;

class MementoTest extends TestCase
{
    public function testOpenTicketAssignAndSetBackToOpen()
    {
        $ticket = new Ticket();
        $ticket->open();
        $openedState = $ticket->getState();

        $this->assetSame(State::STATE_OPENED, (string) $ticket->getState());

        $memento = $ticket->saveToMomento();

        $ticket->assign();
        $this->assetSame(State::STATE_ASSIGNED, (string) $ticket->getState());


        $ticket->restoreFromMemnto($memento);
        $this->assetSame(State::STATE_OPENED, (string) $ticket->getState());
        $this->assertNoSame($openedState, $ticket->getState());
    }
}