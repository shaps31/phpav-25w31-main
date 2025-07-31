<?php

class PurchaseBuilder extends Purchase
{
    public function addProduct(string $name, int $qty): void
    {
        $this->products[$name] = $qty;
    }

    public function getPurchase(): Purchase
    {
        return $this;
    }
}
