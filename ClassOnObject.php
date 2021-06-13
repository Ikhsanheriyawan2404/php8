<?php

class Example {}

$object = new Example();
var_dump($object::class); // PHP 8
var_dump(get_class($object));
var_dump(Example::class);