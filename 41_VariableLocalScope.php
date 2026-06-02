<?php

function createName()
{
  $name = "Nadif"; // local scope
}

createName();
echo $name; //error
