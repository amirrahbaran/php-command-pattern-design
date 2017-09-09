<?php

namespace LightRemoteControl;

class RemoteControl
{
    private $command;
    public function setCommand(Command $command)
    {
        $this->command = $command;
    }

    public function getCommand()
    {
        return $this->command;
    }

    public function pressButton()
    {
        $this->command->execute();
    }
}
