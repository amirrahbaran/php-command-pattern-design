<?php

namespace spec\LightRemoteControl;

use LightRemoteControl\Light;
use LightRemoteControl\LightOffCommand;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LightOffCommandSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(LightOffCommand::class);
    }

    function it_should_set_the_light_object()
    {
        $aLight = new Light();
        $aLight->switchOn();
        $this->lightOffCommand($aLight);
        $this->light->shouldBe($aLight);
    }

    function it_should_switch_the_light_off()
    {
        $aLight = new Light();
        $aLight->switchOn();
        $this->lightOffCommand($aLight);
        $this->execute();
        $this->light->getStatus()->shouldBe(Light::OFF);
    }
}
