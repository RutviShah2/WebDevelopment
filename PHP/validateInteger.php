<?php
$num = "123";
if (filter_var($num, FILTER_VALIDATE_INT))
{
    echo "$num is a valid integer";
}
 else
{
    echo "$num is not a valid integer";
}
?>
