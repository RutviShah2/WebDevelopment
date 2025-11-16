<?php
class User {
    public $name;

    function __construct($n) {
        $this->name = $n;
    }

    function __clone() {
        $this->name = "Copy of " . $this->name;
    }
}

$u1 = new User("Rutvii");
$u2 = clone $u1;

echo $u1->name . "<br>";
echo $u2->name;
?>
