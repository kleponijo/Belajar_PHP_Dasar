<?php

function sayHello($firstName, $lastName = "")
{
  echo "Hello $firstName $lastName" . PHP_EOL;
}

function sayHello2($name, $last_name)
{
  echo "Hello $name $last_name" . PHP_EOL;
}

sayHello("Nadif");
sayHello("Setia");
sayHello("Nadif", "Zidan");
sayHello2("Nadif", "Zidan");
sayHello2("Setia", "Budi");

function sum(int $first, int $last)
{
  $total = $first + $last;
  echo "Total = $first + $last = $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true, false);

function sumAll(...$values)
{
  $total = 0;
  foreach ($values as $value) {
    $total += $value;
  }
  echo "Total " . implode(",", $values) . "= $total" . PHP_EOL;
}

$values = [1, 2, 3, 4, 5];

sumAll(1, 2, 3, 4, 5);
sumAll(...$values);
