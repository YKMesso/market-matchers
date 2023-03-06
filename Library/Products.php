<?php
namespace Library;

abstract class Products {
    public string $itemName;
    public string $itemPrice;
    public Store_Name $store_Name;
    public bool $isAddedTolist;

    /**
     * @return string
     */
    public function getItemName(): string
    {
        return $this->itemName;
    }

    /**
     * @param string $itemName
     */
    public function setItemName(string $itemName): void
    {
        $this->itemName = $itemName;
    }

    /**
     * @return string
     */
    public function getItemPrice(): string
    {
        return $this->itemPrice;
    }

    /**
     * @param string $itemPrice
     */
    public function setItemPrice(string $itemPrice): void
    {
        $this->itemPrice = $itemPrice;
    }

    /**
     * @return Store_Name
     */
    public function getStoreName(): Store_Name
    {
        return $this->store_Name;
    }

    /**
     * @param Store_Name $store_Name
     */
    public function setStoreName(Store_Name $store_Name): void
    {
        $this->store_Name = $store_Name;
    }

    /**
     * @return bool
     */
    public function isAddedTolist(): bool
    {
        return $this->isAddedTolist;
    }

    /**
     * @param bool $isAddedTolist
     */
    public function setIsAddedTolist(bool $isAddedTolist): void
    {
        $this->isAddedTolist = $isAddedTolist;
    }

    public function __toString(): string
    {
        return "Item Name: " . $this->itemName . " Item Price: " . " Store Location: " . $this->store_Name;
    }


}