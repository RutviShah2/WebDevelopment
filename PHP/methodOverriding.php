<?php
class ParentClass
{
    function greet()
    {
        echo "Hello from Parent<br>";
    }
}
class ChildClass extends ParentClass
{
    function greet()
    {
        echo "Hello from Child<br>";
    }
}
$obj = new ChildClass();
$obj->greet();
?>
