<?php
namespace People;
class Customer extends User{
    public int $custID;

    public function __toString()
    {
        return "Customer ID: " . $this->custID;
    }


}