<?php
require_once 'Polymorphism.php';

function sayhallo(Programmer $programmer) {
    if ($programmer instanceof BackendProgrammer) {
        echo "halo backend programamer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof FrontendProgrammer) {
        echo "halo frontend programamer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof Programmer) {
        echo "halo programamer $programmer->name" . PHP_EOL;
    }
}
sayhallo(new Programmer("hafidz"));
sayhallo(new BackendProgrammer("hafidz"));
sayhallo(new FrontendProgrammer("hafidz"));
