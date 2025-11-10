<?php
if (isset($_COOKIE["user"]))
{
    echo "Welcome back, " . $_COOKIE["user"] . "!";
} 
else
{
    echo "Hello, new visitor!";
}
?>
