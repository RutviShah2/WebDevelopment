<?php
class User
{
    public $name, $age;
    function __construct($n = "Guest", $a = 0)
    {
        $this->name = $n;
        $this->age = $a;
    }
    function show()
    {
        echo "Name: $this->name, Age: $this->age<br>";
    }
}
$user1 = new User("Rutvi", 18);
$user2 = new User();
$user1->show();
$user2->show();
?>
