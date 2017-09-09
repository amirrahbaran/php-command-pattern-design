<?php

namespace spec\LightRemoteControl;

use LightRemoteControl\Light;
use LightRemoteControl\Client;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ClientSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Client::class);
    }

    function it_should_be_turned_off_when_the_off_button_pressed()
    {
        $this->pressOffButton()->shouldReturn(Light::OFF);
    }

    function it_should_be_turned_on_when_the_on_button_pressed()
    {
        $this->pressOnButton()->shouldReturn(Light::ON);
    }
}
