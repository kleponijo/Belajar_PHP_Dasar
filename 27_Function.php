<?php

function sayHello()
{
  echo "Hello Function" . PHP_EOL;
}

sayHello();
sayHello();
sayHello();
sayHello();
sayHello();

$buat = true;

if ($buat) {
  function buat1()
  {
    echo "Hello" . PHP_EOL;
  }
}

function buat()
{
  echo "Hello buat" . PHP_EOL;
}

buat1();
buat1();
buat();
buat();
