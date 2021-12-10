<?php
// use digunakan untuk memanggil isi dari namespace saja
// ex
require_once 'Namespace.php';
require_once 'NamespaceHelper.php';

use const Helper\APPLICATION;
use Data\Satu\Konflik;
use function Helper\helpMe;

echo APPLICATION . PHP_EOL;
helpMe();

// buat objek namespace
$konflik1 = new Konflik();
$konflik2 = new Data\Dua\Konflik();
