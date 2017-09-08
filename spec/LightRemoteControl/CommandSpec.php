<?php

namespace spec\LightRemoteControl;

use LightRemoteControl\Command;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CommandSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Command::class);
    }
}
