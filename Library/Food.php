<?php

namespace Library;

class Food extends Products
{
    public float $itemWeight;
    //info as in macros/calories
    public string $macros;
    public string $expiry;

    public function __toString(): string
    {
        return "Item Weight: " . $this->itemWeight . " Macro Information: " . $this->macros . " Expiry Date " . $this->expiry;
    }


}