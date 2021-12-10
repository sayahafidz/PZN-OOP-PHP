<?php
// mengimport sekali banyak namespace dalam sekali use
// dengan menggunakan kata kunci {}
require_once 'Namespace.php';
require_once 'NamespaceHelper.php';

use const Helper\{APPLICATION as APP};
use Data\Satu\{Konflik as kon};
// ini contoh group use
use function Helper\{helpMe as help,APPLICATION as APP};

echo APP . PHP_EOL;
help();

// buat objek namespace
$konflik1 = new kon();
$konflik2 = new Data\Dua\Konflik();
