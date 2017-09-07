<?php

namespace Calculator;

class CalculatorCommand //implements Command
{
    private $operand;
    private $operation;

    public function setOperand($operand)
    {
        $this->operand = $operand;
    }

    public function getOperand()
    {
        return $this->operand;
    }

    public function setOperation($operation)
    {
        $this->operation = $operation;
    }

    public function getOperation()
    {
        return $this->operation;
    }

    public function execute($operand)
    {
        //$this->setOperation
    }

    public function unexecute($argument1)
    {
        // TODO: write logic here
    }
}
