<?php

$first = [
  "first_name" => "Nadif",
];

$last = [
  "first_name" => "Budi",
  "last_name" => "Zidan",
];

$full = $first + $last;
var_dump($full);

$a = [
  "first_name" => "Nadif",
  "last_name" => "Zidan",
];

$b = [
  "last_name" => "Zidan",
  "first_name" => "Nadif",
];

var_dump($a == $b);
var_dump($a === $b);