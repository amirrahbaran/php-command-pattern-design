<?php

namespace spec\LightRemoteControl;

use LightRemoteControl\Light;
use LightRemoteControl\LightOffCommand;
use LightRemoteControl\RemoteControl;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RemoteControlSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RemoteControl::class);
    }

    function it_should_return_switch_off_command()
    {
        $aLight = new Light();
        $aLight->switchOn();
        $anOffCommand = new LightOffCommand;
        $anOffCommand->lightOffCommand($aLight);
        $this->setCommand($anOffCommand);
        $this->getCommand()->shouldReturn($anOffCommand);
    }

    function it_should_not_be_off_untill_the_off_button_not_pressed()
    {
        $aLight = new Light();
        $aLight->switchOn();
        $anOffCommand = new LightOffCommand;
        $anOffCommand->lightOffCommand($aLight);
        $this->setCommand($anOffCommand);
        // $aLight->getStatus()->shouldReturn($aLight::ON);
    }

    // function it_should_be_off_when_pressing_the_off_button()
    // {
    //     $aLight = new Light();
    //     $aLight->switchOn();
    //     $anOffCommand = new LightOffCommand;
    //     $anOffCommand->lightOffCommand($aLight);
    //     $this->setCommand($anOffCommand);
    //     $this->pressButton();
    //     $aLight->getStatus()->shouldReturn($aLight::OFF);
    // }
}
