<?php
$students = array(
    array("Pooja", 85, "A"),
    array("Poojan", 78, "B"),
    array("Rutvi", 92, "A+")
);
for ($i = 0; $i < count($students); $i++)
{
    echo $students[$i][0] . " - Marks: " . $students[$i][1] . " - Grade: " . $students[$i][2] . "<br>";
}
?>
