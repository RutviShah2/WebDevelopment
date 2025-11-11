<?php
class Test
{
    function __construct()
    {
        echo "Object created!<br>";
    }
    function __destruct()
    {
        echo "Object destroyed!";
    }
}
$obj = new Test();
?>
