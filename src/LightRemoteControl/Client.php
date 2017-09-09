<?php

namespace LightRemoteControl;

class Client
{
    public function __construct()
    {
        $this->aControl = new RemoteControl();
        $this->aLight = new Light();
        $this->lightsOff = new LightOffCommand();
        $this->lightsOn = new LightOnCommand();
    }
    
    public function pressOffButton()
    {
        $this->aLight->switchOn();
        $this->lightsOff->lightOffCommand($this->aLight);
        $this->aControl->setCommand($this->lightsOff);
        $this->aControl->pressButton();
        return $this->aLight->getStatus();
    }

    public function pressOnButton()
    {
        $this->aLight->switchOff();
        $this->lightsOn->lightOnCommand($this->aLight);
        $this->aControl->setCommand($this->lightsOn);
        $this->aControl->pressButton();        
        return $this->aLight->getStatus();
    }
}
