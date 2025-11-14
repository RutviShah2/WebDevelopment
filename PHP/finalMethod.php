<?php
class A {
    final function greet() {
        echo "Hello";
    }
}

class B extends A {
    // greet() cannot be overridden
}

$obj = new B();
$obj->greet();
?>
