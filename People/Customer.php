<?php
namespace People;
class Customer extends Account{
    public int $custID;

    public function __toString()
    {
        return "Customer ID: " . $this->custID;
    }


}