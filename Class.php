<?php
// ini adalah kelas di php
class Person {

    const AUTHOR = "Hafidz";
    // ini atribut/properti

    // string adlah type deklaration, php akan ngecek tipe data yang dimasukkan, jika tidak sesuai akan eror
    var string $nama;
    // nullable properties dengan tanda ? sebelum type declaration, membuat properti boleh tidak berisi apapun, bisa ditaru didalam function properi
    var  ? string $alamat;
    // indonesia adalah default value
    var string $negara = 'indonesia';

    function __construct(string $nama, ?string $alamat) {
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    function hallo(?string $nama) {
        if (is_null($nama)) {
            // this untuk mengakses objek saat ini
            // this untuk mengakses propertis
            echo "hi, my name is $this->nama" . PHP_EOL;
        } else {
            echo "hi $nama, my name is $this->nama" . PHP_EOL;

        }
    }
    function info() {
        // self untuk mengakses kelas saat ini
        echo "author " . self::AUTHOR . PHP_EOL;
    }

    function __destruct() {
        echo "objek person " . $this->nama . " is destroyed " . PHP_EOL;
    }
}

class Orang {

}