<?php

namespace Deals;

use Library\Store_Name;

class Offer
{
    public string $description;
    public Offer_Type $dealType;

    public function __toString(): string
    {
        return "Offer: " . $this->dealType . "Offer Description";
    }


}