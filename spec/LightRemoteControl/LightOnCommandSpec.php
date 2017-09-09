<?php

namespace spec\LightRemoteControl;

use LightRemoteControl\Light;
use LightRemoteControl\LightOnCommand;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LightOnCommandSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(LightOnCommand::class);
    }

    function it_should_set_the_light_on()
    {
        $aLight = new Light();
        $aLight->switchOff();
        $this->lightOnCommand($aLight);
        $this->light->shouldBe($aLight);
    }

    function it_should_switch_the_light_on()
    {
        $aLight = new Light();
        $aLight->switchOff();
        $this->lightOnCommand($aLight);
        $this->execute();
        $this->light->getStatus()->shouldBe(Light::ON);
    }

}
