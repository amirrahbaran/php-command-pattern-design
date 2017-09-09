<?php

namespace LightRemoteControl;

class LightOffCommand implements Command
{
    public $light;
    public function lightOffCommand(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->switchOff();
    }
}
