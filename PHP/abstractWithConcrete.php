<?php
abstract class Person {
    abstract function role();

    function greet() {
        echo "Hello!<br>";
    }
}

class Student extends Person {
    function role() {
        echo "I am a Student";
    }
}

$obj = new Student();
$obj->greet();
$obj->role();
?>
