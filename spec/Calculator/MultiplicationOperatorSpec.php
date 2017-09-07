<?php

namespace spec\Calculator;

use Calculator\MultiplicationOperator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MultiplicationOperatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(MultiplicationOperator::class);
    }
}
