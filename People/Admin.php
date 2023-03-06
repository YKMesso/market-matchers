<?php
namespace People;

class Admin extends User {
    public int $adminID;
    public string $adminName;

    public function __toString()
    {
        return "Administrator ID " . $this->adminID . " Administrator Name: " . $this->adminName . "Administrator Email: " . $this->email;
    }


}