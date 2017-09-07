<?php

namespace Calculator;

interface Command
{
    function execute();
    function undo();
}
