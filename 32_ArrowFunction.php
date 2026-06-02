<?php

$firstName = "Nadif";
$lastName = "Zidan";

$anonymousFunction = function () use ($firstName, $lastName): String {
  return "Hello $firstName $lastName" . PHP_EOL;
};

$arrowFunction = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $anonymousFunction();
echo $arrowFunction();
