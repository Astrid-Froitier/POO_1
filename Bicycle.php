<?php

class Bicycle 
{
    
    private string $color = 'pink';
    
    private int $currentSpeed = 30;

    private int $nbSeats = 1;

    private int $nbWheels =2;

public function __construct(string $color, int $currentSpeed, int $nbSeats, int $nbWheels) 
{
    $this->color = $color;
    $this->currentSpeed = $currentSpeed;
    $this->nbSeats = $nbSeats;
    $this->nbWheels = $nbWheels;
}

public function getColor(): string
{
    return $this->color;
}

public function setColor(string $color): void
{
    $this->color = $color;
}

public function getCurrentSpeed(): int
{
    return $this->currentSpeed;
}

public function setCurrentSpeed(int $currentSpeed): void
{
    if($currentSpeed >= 0) {
        $this->currentSpeed = $currentSpeed;
    }
}

public function start(): string
{
    if($this->currentSpeed > 0)
    {
        return $this->currentSpeed;
    } else
    {
        return "You can started your car";
    }
}

public function forward(): string
{
    $this->currentSpeed = 15;
    return "Go !";
}


public function brake(): string
{
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!!";
   }
   $sentence .= "I'm stopped !";
   return $sentence;
} 

}