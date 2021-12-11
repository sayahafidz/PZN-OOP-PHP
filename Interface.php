<?php
// interface mirip seperti abstract class bedanya semua method/function otomatik abstract, tidak memiliki block
// di interface tidak boleh memiliki properties, hanya boleh menggunakan constant
// untuk mewariskan interface ke child tidak menggunakan extends tapi menggunakan implements
// beda dengan class kita bisa implements lebih dari satu interface

// 1 child class bisa implements interface lain, bisa lbh dari 1.
// kalau satu interface ingin mewarisi interface lain harus menggunakan extends bukan implements
namespace Data;

interface NamaBrand {
    function getBrand(): string;
}
interface IsMaintenance {
    function isMaintenance(): bool;
}

interface Mobil extends NamaBrand, isMaintenance {
    // contoh sebuah interface mewariskan lebih dari 1 interface lainnya
    //otomatis menjadi abstrack, function/methodnya jg
    function drive(): void;

    function getTire(): int;
}

// ingat setiap interface yang diwariskan method/function nya harus di implementasikan di class yang diwariskan
class Avanza implements Mobil {
    public function drive(): void {
        echo "drive avanza " . PHP_EOL;
    }
    public function getTire(): int {
        return 4;
    }
    public function getBrand(): string {
        return "avanza";
    }
    public function isMaintenance(): bool {
        return true;
    }
}
