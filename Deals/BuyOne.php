<?php


use Library\Store_Name;

class BuyOne{
    public String $dealName = "Buy One Get One Free!";
    public Store_Name $store;

    /**
     * @return String
     */
    public function getDealName(): string
    {
        return $this->dealName;
    }

    /**
     * @return Store_Name
     */
    public function getStore(): Store_Name
    {
        return $this->store;
    }

    /**
     * @param Store_Name $store
     */
    public function setStore(Store_Name $store): void
    {
        $this->store = $store;
    }


}