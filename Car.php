<?php

require_once 'Vehicule.php';

class Car extends Vehicule{

    public const ALLOWED_ENERGIES =[
        'fuel',
        'electric'
    ];

    private string $energy;

    private Int $energyLevel;


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this -> energy= $energy;
    }


    public function getEnergy(): string
    {
        return $this -> energy;
    }
    public function setEnergy(): Car
    {
        if (in_array($energy, self:: ALLOWED_ENERGIES)){
            $this -> energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this -> energyLevel;
    }
    public function setEnergyLevel(): int
    {
        $this -> energyLevel = $energyLevel;
    }

}


