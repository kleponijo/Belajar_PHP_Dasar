<?php

$a = 10;
$b = $a++; // sama aja seperti $b = $a; dan $a++ sama aja seperti $a = $a + 1;
$c = ++$a; // sama aja seperti $a + 1; dulu baru $c = $a; hasilnya 12;

var_dump($a);
var_dump($b);
var_dump($c);