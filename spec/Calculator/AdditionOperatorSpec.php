<?php

namespace spec\Calculator;

use Calculator\AdditionOperator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AdditionOperatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(AdditionOperator::class);
    }

    function it_should_return_2_for_1_plus_1()
    {
        $this->execute(1)->shouldReturn(1);
    }

    function it_should_return_1_for_addition_undo()
    {
        $this->undo()->shouldReturn(1);
    }
}
