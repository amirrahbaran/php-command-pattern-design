<?php

namespace spec\Calculator;

use Calculator\SubtractionOperator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SubtractionOperatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SubtractionOperator::class);
    }
}
