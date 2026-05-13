<?php

$values = array(1, 2, 3, 4, 5.5);
var_dump($values);

$names = ["Nadif", "Zidan", "Tazaka"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Klepon";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Ijo";
var_dump($names);

var_dump(count($names));

$nadif = array(
  "id" => "Nadif",
  "name" => "Nadif Zidan Tazaka",
  "age" => 30,
  "address" => array(
    "city" => "Banyuwangi",
    "country" => "Indonesia"
  )
);

var_dump($nadif["id"]);
var_dump($nadif["address"]["city"]);

$budi = [
  "id" => "Budi",
  "name" => "Budi Nugraha",
  "age" => 35,
  "address" => [
    "city" => "Jakarta",
    "country" => "Indonesia"
  ]
];

var_dump($budi);
var_dump($budi["address"]);