<?php

$sayHello = function (String $name) {
  echo "Hello $name" . PHP_EOL;
};

$sayHello("Nadif");
$sayHello("Budi");

function sayGoodBye(String $name, $filter)
{
  $finalName = $filter($name);
  echo "Goodbye $finalName" . PHP_EOL;
}

sayGoodBye("Nadif", function ($name): String {
  return strtoupper($name);
});

$filterFunction = function ($name): String {
  return strtoupper($name);
};

sayGoodBye("Nadif", $filterFunction);

$firstName = "Nadif";
$lastName = "Zidan";

$sayHelloNadif = function () use ($firstName, $lastName) {
  echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloNadif();

$firstName = "Budi";
$lastName = "Setiawan";

$sayHelloNadif();
