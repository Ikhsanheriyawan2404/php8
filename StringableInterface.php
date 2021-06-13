<?php

function sayHello(Stringable $stringable): void
{
	echo "Hello {$stringable->__toString()}";
}

class Person {

	public function __toString(): string
	{
		return "Ikhsan";
	}

}

sayHello(new Person());