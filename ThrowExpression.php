<?php

function sayHello(?string $name)
{
	if ($name == NULL) {
		throw new Exception("Tidak Boleh NULL");
	}
	echo "Hello $name" . PHP_EOL;
}

function sayHelloExpression(?string $name)
{
	$result = $name != NULL ? "Hello $name" : throw new Exception("Tidak Boleh NULL");
	echo $result . PHP_EOL;
}

sayHello("IKhsan");
sayHelloExpression("IKhsan");