<?php
// kalau ingin mengakses fungsi yang berada di parent klas yang telah ditimpa, gunakan kata kunci parent
class Manager {
    public string $Nama;
    function sayhallo(?string $Nama): void {
        echo "hi $Nama, my name is $this->Nama " . PHP_EOL;
    }
}
class VicePresident extends Manager {
    function sayhallo(?string $Nama): void {
        echo "susanto " . PHP_EOL;
    }
    function parentsayhallo(string $dan) {
        parent::sayhallo($dan);
    }
}

$vp       = new VicePresident;
$vp->Nama = 'pes';
$vp->sayhallo('hafidz');
$vp->parentsayhallo('hafidz');
