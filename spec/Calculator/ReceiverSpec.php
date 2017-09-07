<?php

namespace spec\Calculator;

use Calculator\Receiver;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ReceiverSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Receiver::class);
    }
}
