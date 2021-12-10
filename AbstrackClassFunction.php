<?php

// abstrak klas tidak bisa dibuat objek baru, hanya child class/subsclass nya yang bisa dibuat objeknya

namespace Data;
abstract class Lokasi {
    public string $name;
    //jika menggunakan abstrak function turunan dari lokasi akan dipaksa untuk menggunakannya jg
    abstract function run();
}

class Kota extends Lokasi {
    // overide abstract funciton
    public function run() {
        return 'run';
    }
}
