<?php

namespace spec\Calculator;

use Calculator\Invoker;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class InvokerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Invoker::class);
    }

    function it_should_return_addition_command()
    {
        $this->getCommand(1)->shouldHaveType(AdditionOperator::class);
    }
}
