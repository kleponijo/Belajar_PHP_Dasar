<?php

function sayHello($firstName = "Anonymous", $lastName)
{
  echo "Hello $firstName $lastName" . PHP_EOL;
}

function sayHello2($name, $last_name)
{
  echo "Hello $name $last_name" . PHP_EOL;
}

sayHello("Nadif");
sayHello("Setia");
sayHello();
sayHello2("Nadif", "Zidan");
sayHello2("Setia", "Budi");
