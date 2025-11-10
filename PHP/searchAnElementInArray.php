<?php
$fruits = array("apple", "banana", "mango", "grapes");
$search = "mango";
if (in_array($search, $fruits)) 
{
    echo "$search found in array.";
} 
else
{
    echo "$search not found.";
}
?>
