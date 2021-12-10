<?php
require_once 'Class.php';
define('APPLICATION', 'Belajar konstan');
const APP_NAME = 'belajar oop';

echo APPLICATION . PHP_EOL;
echo APP_NAME . PHP_EOL;

// mengakses konstan
echo Person::AUTHOR . PHP_EOL;