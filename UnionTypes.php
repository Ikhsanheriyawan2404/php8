<?php

class Example {

	public string|int|array|bool $data;

}

$example = new Example();
$example->data = "Ikhsan";
$example->data = 100;
$example->data = [];
$example->data = true;

function sampleFunctionData(string|array $data): string|array
{
	if (is_array($data)) {
		return ["Array"];
	} else if (is_string($data)) {
		return "String";
	}
}

var_dump(sampleFunctionData([]));
var_dump(sampleFunctionData("Ikhsan"));