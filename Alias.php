<?php
// membuat nama lain dari namespace function, const dll
// menggunakan kata kunci as setelah nama namespace
require_once 'Namespace.php';
require_once 'NamespaceHelper.php';

use const Helper\APPLICATION as APP;
use Data\Satu\Konflik as kon;
use function Helper\helpMe as help;

echo APP . PHP_EOL;
help();

// buat objek namespace
$konflik1 = new kon();
$konflik2 = new Data\Dua\Konflik();
