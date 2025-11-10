<?php
session_start();
if (isset($_SESSION["user"]))
{
    echo "Welcome back, " . $_SESSION["user"] . "!";
} 
else
{
    echo "No active session found.";
}
?>
