<?php
class ParentClass
{
    function greet()
    {
        echo "Hello from Parent!";
    }
}
class ChildClass extends ParentClass
{
    function reply() 
    {
        echo "Hello from Child!";
    }
}
$obj = new ChildClass();
$obj->greet();
echo "<br>";
$obj->reply();
?>
