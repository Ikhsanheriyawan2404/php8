<?php

class Product {

	public function __construct(public int $id,
								public string $name,
								public int $price = 0,
								public int $quantity = 1,
								private bool $expensive = false)
	{
	}

}

$product = new Product(id: 1, name: "Ikhsan Heriyawan", price: 15000);
var_dump($product);
echo "$product->name";