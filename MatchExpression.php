<?php

$value = "B";
$result = "";
switch ($value) {
	case "A":
	case "B":
	case "C":
		$result = "Anda Lulus";
		break;
	case "D":
		$result = "Anda Tidak Lulus";
		break;
	case "E":
		$result = "Mungkin Anda Salah Jurusan";
		break;
	default: 
		$result = "Nilai Apa Itu?";
}

echo $result . PHP_EOL;

$result = match ($value) {
	"A", "B", "C" => "Anda Lulus",
	"D" => "Anda Tidak Lulus",
	"E" => "Mungkin Anda Salah Jurusan",
	default => "Nilai Apa Itu?"
};

echo $result . PHP_EOL;

$nilai = 80;

$result = match (true) {
	$nilai >= 90 => "A", 
	$nilai >= 80 => "B", 
	$nilai >= 70 => "C", 
	$nilai >= 60 => "D",
	default => "E" 
};

echo $result . PHP_EOL;

$name = "Mr Ikhsan";
$result = match(true) {
	str_contains($name, 'Mr') => "Hello Sir",
	str_contains($name, 'Mrs') => "Hello Mum",
};

echo $result . PHP_EOL;