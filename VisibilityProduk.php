<?php

// visibility   class   subclas     world
// public          y    y           y
// protected       y    y           n
// private         y    n           n

class Produk {
    private string $nama;
    private int $price;

    public function __construct(string $nama, int $price) {
        $this->nama  = $nama;
        $this->price = $price;
    }
    public function getNama() {
        return $this->nama;
    }
    public function getPrice() {
        return $this->price;
    }
}

$produk = new Produk('apel', 200);
// echo $produk->nama;
// echo $produk->price;

$produk->getNama();
$produk->getPrice();
