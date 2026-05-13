<?php

$name = "Nadif";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is name Null? : ";
echo var_dump(is_null($name));

$contoh = "Nadif";
unset($contoh);

$contoh = "Nadif";
$contoh = null;

var_dump(isset($contoh));