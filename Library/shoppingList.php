<?php

class shoppingList{
    public int $listQuantity;
    public float $totalCost;

    /**
     * @return int
     */
    public function getListQuantity(): int
    {
        return $this->listQuantity;
    }

    /**
     * @param int $listQuantity
     */
    public function setListQuantity(int $listQuantity): void
    {
        $this->listQuantity = $listQuantity;
    }

    /**
     * @return float
     */
    public function getTotalCost(): float
    {
        return $this->totalCost;
    }

    /**
     * @param float $totalCost
     */
    public function setTotalCost(float $totalCost): void
    {
        $this->totalCost = $totalCost;
    }

    public function __toString(): string
    {
        return "Number of Items: " . $this->listQuantity . " Total Cost: " . $this->totalCost;
    }


}