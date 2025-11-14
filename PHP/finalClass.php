<?php
final class A {
    function show() {
        echo "Final class - cannot be inherited";
    }
}

$obj = new A();
$obj->show();
?>
