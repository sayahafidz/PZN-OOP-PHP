<?php
require_once "Trait.php";

use Data\tret\{Person, sayHallo, sayGoodbye};

$person = new Person();
$person->goodbye("hafidz");
$person->hallo("hafidz");

$person->name = "hafidz";
$person->run();
var_dump($person);
