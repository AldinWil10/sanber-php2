<?php
require('animal.php');
$sheep = new Animal("shaun"); //penambahan object baru untuk class Animal dengan name Shaun menggunakan construct
echo "nama hewan: " . $sheep->name . "<br>"; // "shaun"
echo "jumlah kaki: " . $sheep->legs . "<br>"; // 4
echo "tipe darah: " . $sheep->cold_blooded . "<br>"; // "no"