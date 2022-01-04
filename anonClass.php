<?php
// anonimus class berfungsi untuk membuat sebuah class dan langsung membuat objeknya
// anonimus function cocok buat kasus implementasi interface atau abstract class sederhana


interface helloWorld
{
    function sayHello(): void;
}

// // yang biasanya dilakukan
// class sampleHelloWorld implements helloWorld
// {
//     public function sayHello(): void
//     {
//         echo "Hello World" . PHP_EOL;
//     }
// }
// $helloworld = new sampleHelloWorld();
// $helloworld->sayHello();


// anon class
$helloworld = new class("hafidz") implements helloWorld
{
    public string $name;
    // anonclass dengan kontruktor
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};
$helloworld->sayHello();
