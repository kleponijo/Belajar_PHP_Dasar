<?php

$name = "Nadif"; // global scope

function sayHello()
{
  // echo $name . PHP_EOL; // error
  global $name;
  echo $name . PHP_EOL;

  echo $GLOBALS["name"] . PHP_EOL;
}

sayHello();
