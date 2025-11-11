<?php
class Student
{
    public $name;
    function __construct($n)
    {
        $this->name = $n;
    }
    function show()
    {
        echo "Hello, " . $this->name;
    }
}
$obj = new Student("Rutvi");
$obj->show();
?>
