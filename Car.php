<?php

class Car 
{
        // Constructor before php8

    private int $nbWheels;
    private int $currentSpeed = 0;
    private string $color;
    private int $nbSeats;
    private string $fuel;
    private int $fuelLevel;

    public function __construct(string $color, int $nbSeats, string $fuel)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->fuel = $fuel;
    }

        // Constructor with php8

    // public function __construct(private int $nbWheels = 4, private int $currentSpeed = 90, private string $color = 'white', private int $nbSeats = 5, private string $fuel = 'gasoline', private int $fuelLevel = 40)
    // {
    //     $this->nbWheels = $nbWheels;
    //     $this->currentSpeed = $currentSpeed;
    //     $this->color = $color;
    //     $this->nbSeats = $nbSeats;
    //     $this->fuel = $fuel;
    //     $this->fuelLevel = $fuelLevel;
    // }



    public function forward(): string
    {
        $this->currentSpeed;
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
 

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }


    public function getCurrentSpeed(int $currentSpeed): int
    {
        return $this->currentSpeed;
    }


    public function getColor(): string
    {
        return $this->color;
    }



    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }


    public function getFuel(): string
    {
        return $this->fuel;
    }


    public function getFuelLevel(): int
    {   
        return $this->fuelLevel;
    }


}