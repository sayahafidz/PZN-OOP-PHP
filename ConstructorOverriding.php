<?php
// menimpa konstruktor yang ada di parent klas
class Manager {
    public string $Nama;
    public string $title;

    public function __construct(string $nama = "", string $title = "Manager") {
        $this->Nama  = $nama;
        $this->title = $title;
    }
    function sayhallo(?string $Nama): void {
        echo "hi $Nama, my name is $this->Nama " . PHP_EOL;
    }
}
class VicePresident extends Manager {

    public function __construct(string $nama) {
        parent::__construct($nama, "VP");
    }
    function sayhallo(?string $Nama): void {
        echo "susanto " . PHP_EOL;
    }
    function parentsayhallo(string $dan) {
        parent::sayhallo($dan);
    }
}

$vp       = new VicePresident("hafidz");
$vp->Nama = 'pes';
$vp->sayhallo('hafidz');
$vp->parentsayhallo('hafidz');
