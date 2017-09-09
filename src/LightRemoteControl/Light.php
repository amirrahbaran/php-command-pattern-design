<?php

namespace LightRemoteControl;

class Light
{
    public const ON = true;
    public const OFF = false;
    private $status;
    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function switchOn()
    {
        $this->setStatus(self::ON);
    }

    public function switchOff()
    {
        $this->setStatus(self::OFF);
    }
}
