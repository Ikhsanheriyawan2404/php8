<?php

echo "------------------------" . PHP_EOL;
// str_contains()
var_dump(str_contains("Ikhsan Heriyawan", "Ikhsan"));
var_dump(str_contains("Ikhsan Heriyawan", "Heriyawan"));
var_dump(str_contains("Ikhsan Heriyawan", "Joko"));

echo "------------------------" . PHP_EOL;
// str_starts_with()
var_dump(str_starts_with("Ikhsan Heriyawan", "Ikhsan"));
var_dump(str_starts_with("Ikhsan Heriyawan", "Heriyawan"));
var_dump(str_starts_with("Ikhsan Heriyawan", "Joko"));

echo "------------------------" . PHP_EOL;
// str_ends_with()
var_dump(str_ends_with("Ikhsan Heriyawan", "Ikhsan"));
var_dump(str_ends_with("Ikhsan Heriyawan", "Heriyawan"));
var_dump(str_ends_with("Ikhsan Heriyawan", "Joko"));