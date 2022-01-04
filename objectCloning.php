<?php
// menduplikasi objek

class Student
{
    public string $name;
    public string $id;
    public int $value;
}

$student1 = new Student();
$student1->name = "hafidz";
$student1->id = '22';
$student1->value = 99;
var_dump($student1);

// kloning objek
$student2 = clone $student1;
var_dump($student2);
