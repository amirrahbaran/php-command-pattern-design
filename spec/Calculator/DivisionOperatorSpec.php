<?php

namespace spec\Calculator;

use Calculator\DivisionOperator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DivisionOperatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(DivisionOperator::class);
    }
}
