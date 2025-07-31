<?php

class Purchase
{
    protected array $products = [];

    public function getProduct(string $name)
    {
        return $this->products[$name];
    }
}
