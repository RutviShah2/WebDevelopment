<?php
$student = array
(
    "name" => "Rutvii",
    "age" => 18,
    "course" => "B TECH"
);
echo "Student Details:<br>";
foreach ($student as $key => $value)
{
    echo ucfirst($key) . ": " . $value . "<br>";
}
?>
