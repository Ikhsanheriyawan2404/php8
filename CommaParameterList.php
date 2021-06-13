<?php

function fullName(string $first, string $last)
{
	return "$first $last";
}

echo fullName(
	"Ikhsan",
	"Heriyawan",
);

$array = [
	"firstName" => "Ikhsan",
	"lastName" => "Heriyawan",
	"age" => 17,
	"email" => "ikhsan@gmail.com",
];

function sum(int... $number) {}

echo sum(
	2,
	2,
	2,
	2,
	2,
	2,
	2,
	2,
	2,
	2,
	2,
	2,
	2,
	2,
	2,
);