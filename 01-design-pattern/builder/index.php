<?php

$builder = new PurchaseBuilder();
$builder->addProduct('product_name 1', 10);
$builder->addProduct('product_name 2', 5);
$builder->addProduct('product_name 3', 1);
$builder->addProduct('product_name 4', 4);

$purchase = $builder->getPurchase();
