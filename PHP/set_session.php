<?php
session_start();
$_SESSION["user"] = "Rutvii";
echo "Session started for " . $_SESSION["user"];
?>
