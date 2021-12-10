<?php

// membuat objek namespace
// require_once 'nama file berisi namespace nya' jika berada difolder lain
require_once 'Namespace.php';
require_once 'NamespaceHelper.php';

echo Helper\APPLICATION . PHP_EOL;
Helper\helpMe();

// buat objek namespace
$konflik1 = new Data\Satu\Konflik();
$konflik2 = new Data\Dua\Konflik();
