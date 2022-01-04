<?php
// jika sebuah function terdapat kata kunci final maka function tsb tidak akan bisa di override pada child class nya
// cocok untuk mengunci implementasi sebuah method supaya tidak bisa dirubah di class turunannya
class socialMedia
{
    public string $name;
}
class facebook extends socialMedia
{
    final public function login(string $username, string $password): bool
    {
        return true;
    }
}

class fakefacebook extends facebook
{
    public function login(string $username, string $password): bool
    {
        return false;
    }
}
