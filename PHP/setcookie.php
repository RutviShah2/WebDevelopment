<?php
// Create a cookie that lasts for 1 day (86400 seconds)
setcookie("user", "Rutvii", time() + 86400, "/");
echo "Cookie 'user' has been set!";
?>
