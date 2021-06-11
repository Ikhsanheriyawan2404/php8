<?php

function sayHello(string $first, string $middle = null, string $last): void
{
	echo "Hello $first $middle $last " . PHP_EOL;
}

sayHello(first: "Ikhsan", last: "Kuncoro");
