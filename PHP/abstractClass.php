<?php
abstract class Shape
{
    abstract public function area($x);
}
class Square extends Shape
{
    public function area($x)
    {
        echo "Area: " . ($x * $x);
    }
}
$obj = new Square();
$obj->area(5);
?>
