<?php
// membuat properties atau function secara dinamis
// overloading ini mirip dengan meta programming di ruby
// tidak sama dengan overloading di java

class Kosong
{
    private array $properties = [];
    public function __get($name)
    {
        return $this->properties[$name];
    }
    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }
    public function __isset($name)
    {
        return isset($this->properties[$name]);
    }
    public function __unset($name)
    {
        unset($this->properties[$name]);
    }
}

$kosong = new Kosong();
$kosong->name  = "hafidz";

echo "nama saya $kosong->name" . PHP_EOL;
