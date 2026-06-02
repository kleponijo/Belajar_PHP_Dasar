<?php

function sayHello(String $name, callable $filter)
{
  $finalName = call_user_func($filter, $name);
  echo "Hello $finalName" . PHP_EOL;
}

sayHello("Nadif", "strtoupper");
sayHello("Nadif", "strtolower");
sayHello("Nadif", function (String $name): String {
  return strtoupper($name);
});

sayHello("Nadif", fn(String $name) => strtoupper($name));
