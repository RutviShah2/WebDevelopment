<?php
function studentDetails()
{
    return array("Name" => "Rutvi", "Age" => 18, "Course" => "B TECH");
}
$info = studentDetails();
foreach ($info as $key => $value)
{
    echo "$key: $value<br>";
}
?>
