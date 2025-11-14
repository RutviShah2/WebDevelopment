<?php
class A {
    protected $name = "Rutvii";
}

class B extends A {
    function show() {
        echo $this->name;
    }
}

$obj = new B();
$obj->show();
?>
