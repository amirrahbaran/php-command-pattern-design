<?php

namespace Calculator;

class Receiver
{
    private $speed;
    private $photon;

    public function action()
    {
        $this->speed= 20;
        $this->photon = 16; 
        $launcher=new Move();
        echo $launcher->setVelocity($this->speed,$this->photon);
    }
}
