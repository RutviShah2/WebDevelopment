<?php
session_start();
$_SESSION["color"] = "pink";
echo "Favorite color is " . $_SESSION["color"] . "<br>";
$_SESSION["color"] = "purple";
echo "Updated favorite color is " . $_SESSION["color"];
?>
