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

$name = "Nadif";

echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

$contoh = "Nadif";
unset($contoh); // menghapus variabel
// echo $contoh; // variable terhapus
$contoh = "Nadif";
$contoh = null;
var_dump(isset($contoh));