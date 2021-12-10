<?php
// ini objek
require_once 'Class.php';
$orang = new Person();
// manipulasi properti/atribut
$orang->nama = 'hafidz';
$orang->alamat = 'perbaungan';
$orang->negara = 'indonesia';
var_dump($orang);

// properti dapat diakses dengan -> tanda panah
echo "nama " . $orang->nama . PHP_EOL;
echo "alamat " . $orang->alamat . PHP_EOL;
echo "negara " . $orang->negara . PHP_EOL;
