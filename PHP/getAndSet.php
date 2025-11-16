<?php
class Student {
    private $data = [];

    // For setting private properties
    public function __set($key, $value) {
        $this->data[$key] = $value;
    }

    // For getting private properties
    public function __get($key) {
        return $this->data[$key];
    }
}

$obj = new Student();

$obj->name = "Rutvii";   // calls __set()
$obj->age = 18;          // calls __set()

echo $obj->name . "<br>"; // calls __get()
echo $obj->age;           // calls __get()
?>
