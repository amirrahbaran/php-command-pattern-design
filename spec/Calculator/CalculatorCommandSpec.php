<?php

namespace spec\Calculator;

use Calculator\CalculatorCommand;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CalculatorCommandSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(CalculatorCommand::class);
    }
    
    function it_should_set_operand_char_and_get_the_same_value()
    {
        $opchar = '+';
        $this->setOperand($opchar);
        $this->getOperand()->shouldReturn($opchar);
    }

    function it_should_set_operation_char_and_get_the_same_value()
    {
        $opnum = 3;
        $this->setOperation($opnum);
        $this->getOperation()->shouldReturn($opnum);
    }

    // function it_should_return_5_for_add_2_3()
    // {
    //     $this->setOperand(2);
    //     $this->setOperation('+');
    //     $this->execute(3)->shouldReturn(5);
    // }
    
    // function it_should_return_2_for_undo_add_3_to_2()
    // {
    //     $this->setOperand(2);
    //     $this->setOperation('+');
    //     $this->execute(3);
    //     $this->unexecute(1)->shouldReturn(2);
    // }
}
