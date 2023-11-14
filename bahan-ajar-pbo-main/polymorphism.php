<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Mis");
var_dump($company);

$company->programmer = new BackendProgrammer("Mis");
var_dump($company);

$company->programmer = new FrontendProgrammer("Mis");
var_dump($company);

sayHelloProgrammer(new Programmer("Mis"));
sayHelloProgrammer(new BackendProgrammer("Mis"));
sayHelloProgrammer(new FrontendProgrammer("Mis"));