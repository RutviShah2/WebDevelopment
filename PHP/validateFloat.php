<?php
$value = "45.89";
if (filter_var($value, FILTER_VALIDATE_FLOAT))
{
    echo "$value is a valid float number";
}
 else 
{
    echo "$value is not valid";
}
?>
