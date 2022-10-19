<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;
    private int $storageCapacity;
    private int $loading = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->storageCapacity = $storageCapacity;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    /**
     * @param int $storageCapacity
     */
    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    /**
     * @return int
     */
    public function getLoading(): int
    {
        return $this->loading;
    }

    /**
     * @param int $loading
     */
    public function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }

    public function isFull(): string
    {
        $sentenceIsFull = '';
        if ($this->loading < $this->storageCapacity)
        {
            $sentenceIsFull = "in filling";
        } elseif ($this->loading == $this->storageCapacity)
        {
            $sentenceIsFull =  "load";
        } else {
            $sentenceIsFull = 'Truck loading is not ok';
        }
        return $sentenceIsFull;

    }

}