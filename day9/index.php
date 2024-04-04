<?php

// require('animal.php');
require('other.php');

$sheep = new Animal("shaun"); //penambahan object baru untuk class Animal dengan name Shaun menggunakan construct

echo "nama hewan: " . $sheep->name . "<br>"; // "shaun"
echo "jumlah kaki: " . $sheep->legs . "<br>"; // 4
echo "cold blooded: " . $sheep->cold_blooded . "<br>"; // "no"
echo  "<hr>";

$kodok = new frog("buduk");

echo "nama hewan: " . $kodok->name . "<br>";
echo "jumlah kaki: " . $kodok->legs . "<br>";
echo "cold blooded: " . $kodok->cold_blooded . "<br>";
$kodok->jump();
echo  "<hr>";

$sungokong = new ape("kera sakti");

echo "nama hewan: " . $sungokong->name . "<br>";
echo "jumlah kaki: " . $sungokong->legs . "<br>";
echo "cold blooded: " . $sungokong->cold_blooded . "<br>";
$sungokong->yell();
