<?php

// polimorpism adalah objek yang bisa berubah ubah namun perbuahan tersebut terbatas pada turunan dari obejk tersebut
class Programmer {
    public string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer {

}
class FrontendProgrammer extends Programmer {

}

class Company {
    public Programmer $programmer;
}

// contoh
$company             = new Company();
$company->programmer = new Programmer("hafidz"); // merubah menjadi programmer
$company->programmer = new BackendProgrammer("hafidz"); //merubah menjadi backendprogrammer
$company->programmer = new FrontendProgrammer("hafidz"); //merubah menjadi frontendprogrammer

// function argumen polimorpism
function halloprogrammer(Programmer $programmer) {
    echo "hallo programmer $programmer->name" . PHP_EOL;
}

halloprogrammer(new Programmer("hafidz"));
halloprogrammer(new BackendProgrammer("hafidz"));
halloprogrammer(new FrontendProgrammer("hafidz"));
