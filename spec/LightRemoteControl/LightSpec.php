<?php

namespace spec\LightRemoteControl;

use LightRemoteControl\Light;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LightSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Light::class);
    }

    function it_should_return_the_light_on()
    {
        $this->setStatus(Light::ON);
        $this->getStatus()->shouldReturn(true);
    }

    function it_should_return_the_light_off()
    {
        $this->setStatus(Light::OFF);
        $this->getStatus()->shouldReturn(false);
    }

    function it_should_the_light_on()
    {
        $this->switchOn();
        $this->getStatus()->shouldBe(true);
    }

    function it_should_the_light_off()
    {
        $this->switchOff();
        $this->getStatus()->shouldBe(false);
    }
}
