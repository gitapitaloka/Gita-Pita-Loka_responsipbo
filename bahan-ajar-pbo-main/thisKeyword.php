<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$gita = new Person("gita", "bengkulu");

// tambahkan value nama di object
$gita->nama = "gita";

// panggil function sayHelloNull dengan parameter
$gita->sayHelloNull("Kic");

// buat object dari kelas person
$pita = new Person("pita", "linggau");

// tambahkan value nama di object
$pita->nama = "pita";

// panggil function sayHelloNull dengan parameter null
$pita->sayHelloNull(null);
