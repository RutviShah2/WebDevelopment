<?php
setcookie("name", "Rutvii", time() + 3600, "/");
setcookie("city", "Ahmedabad", time() + 3600, "/");
?>
<?php
if (isset($_COOKIE["name"]) && isset($_COOKIE["city"]))
{
    echo "Name: " . $_COOKIE["name"] . "<br>";
    echo "City: " . $_COOKIE["city"];
}
 else
{
    echo "Cookies are not set yet!";
}
?>
