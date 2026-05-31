<?php

function foo()
{
  echo "Foo" . PHP_EOL;
}

function bar()
{
  echo "Bar" . PHP_EOL;
}

$functionYangAkanDipanggil = "foo";
$functionYangAkanDipanggil();

$functionYangAkanDipanggil = "bar";
$functionYangAkanDipanggil();

function sayHello(String $name, $filter)
{
  $finalName = $filter($name);

  echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(String $name): String
{
  return "Sample $name";
}

sayHello("Nadif", "sampleFunction");
sayHello("Nadif", "strtoupper");
sayHello("Nadif", "strtolower");
