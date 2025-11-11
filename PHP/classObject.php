<?php
class Car
{
    public $brand = "BMW";
    function start()
    {
        echo "Car started!";
    }
}
$obj = new Car();
echo $obj->brand . "<br>";
$obj->start();
?>
