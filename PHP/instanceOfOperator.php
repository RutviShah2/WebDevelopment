<?php
class Car {}
class Bike {}
$vehicle = new Car();
if ($vehicle instanceof Car)
{
    echo "It's a car!";
} 
else
{
    echo "It's not a car!";
}
?>
