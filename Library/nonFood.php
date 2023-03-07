<?php

namespace Library;

class nonFood
{
    public string $info;
    public bool $flammable;
    public bool $toxic;

    public function __toString(): string
    {
        return "Product Information: " . $this->info . " Flammable: " . $this->flammable . " Toxic: " . $this->toxic;
    }


}