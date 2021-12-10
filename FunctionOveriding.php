<?php
// menimpa function yang telah ada di kelas parent
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
}

$vp = new VicePresident;
$vp->sayhallo('hafidz');
