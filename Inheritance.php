<?php

class Manager {
 var string $Nama;
 function sayhallo(?string $Nama): void {
  echo "hi $Nama, my name is $this->Nama " . PHP_EOL;
 }
}
class VicePresident extends Manager {

}
