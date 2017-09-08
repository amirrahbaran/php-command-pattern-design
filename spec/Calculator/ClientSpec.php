<?php

namespace spec\Calculator;

use Calculator\Client;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ClientSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Client::class);
    }

    function it_should_set_receiver()
    {
        $anAddCommand = new \Calculator\AdditionOperator;
        $this->setReceiver()->shouldReturn(0);
    }
}
