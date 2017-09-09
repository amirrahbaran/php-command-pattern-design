<?php

namespace LightRemoteControl;

class LightOnCommand implements Command
{
    public $light;
    public function lightOnCommand(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->switchOn();
    }
}
