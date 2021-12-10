<?php

// enkapsulasi, setiap properties dan functionnya harus memiliki visibility private
// jika ingin mengamil data nya dapat membuat public function dan menggunakan getXXXX() xxxx adalah nama properti nya
// jika ingin me set data dapat membuat public function dan menggunakan setXXXXX()
// untuk mengambil data dari tipe data boolean menggunakan isXXXX();

class Enkapsulasi {
    private string $name;
    private bool $gender;

    public function setName(string $name): void {

        // validasi kalau string kosong jangan di set
        if (trim($name) != "") {
            $this->name = $name;

        }
    }

    public function setGender(bool $gender): void {
        $this->gender = $gender;
    }

    public function getName(): string {
        return $this->name;
    }
    public function getGender(): string {
        return $this->gender;
    }
}

$en = new Enkapsulasi();
$en->setName("hafidz");
echo $en->getName();
