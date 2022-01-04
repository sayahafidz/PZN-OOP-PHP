<?php
// trait mirip abstract class bisa untuk membuat konkrit function atau abstract function
// bedanya dengan abstrack class, class bisa menggunakan lebih dari 1 trait
// trait mirip extension kita bisa tambah konkrit function ke dlm class dengan trait
// sederhanya trait itu untuk menyimpan function yanh bisa digunakan ulang dibeberapa class
// untuk menggunakan trait, gunakan USE di dalam class
namespace Data\tret;

trait sayGoodbye {
    public function goodbye(?string $name): void {
        if (is_null($name)) {
            echo "goodbye" . PHP_EOL;
        } else {
            echo "goodbye $name " . PHP_EOL;
        }
    }
}

trait sayHallo {
    public function hallo(?string $name): void {
        if (is_null($name)) {
            echo "hallo" . PHP_EOL;
        } else {
            echo "hallo $name " . PHP_EOL;
        }
    }
}

trait hasName {
    // dengan menambahkan properties pada trait secara otomatis class yang menggunakan trait ini akan memiliki properties ini juga
    public string $name;
}

trait canRun {
    // di trait kita bisa menambahkan abstrak function, jika terdapat abstract fucntion pada trait maka pada class yang menggunakan trait ini wajib meng-override abstract function ini
    public abstract function run(): void;
}

class parentPerson {
    public function goodbye(?string $name): void {
        // override function di dalam trait
        echo "goodbye in person " . PHP_EOL;
    }

    public function hallo(?string $name): void {
        // override function di dalam trait
        echo "hallo in person " . PHP_EOL;
    }
}

// jika sebuah class memiliki parent class dan dalam class tsb memiliki function yang sama dengan nama function didalam trait maka function yang ada di dalam parent class tsb akan di override oleh trait
class Person extends parentPerson {
    // contoh penggunaan trait
    // semua function yang ada pada trait dibawah akan ter-include ke dalam class person (bukan pewarisan mirip extension)
    use sayGoodbye, sayHallo, hasName, canRun{
        // trait visibility overriding
        // mengubah visibility dari function trait dari public menjadi private
        // hallo as private;
        // goodbye as private;
    }

    public function run(): void {
        // override abstrack class
        echo "person $this->name is running " . PHP_EOL;
    }

    // override function yang ada didalam trait
    // public function hallo(?string $name): void {
    //     // override function di dalam trait
    //     echo "hallo in person " . PHP_EOL;
    // }
}
