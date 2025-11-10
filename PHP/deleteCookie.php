<?php
// To delete, set the expiry time in the past
setcookie("user", "", time() - 3600, "/");
echo "Cookie 'user' deleted!";
?>
