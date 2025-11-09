<?php
$numbers = array(10, 20, 30, 40, 50);
echo "Sum: " . array_sum($numbers) . "<br>";
echo "Count: " . count($numbers) . "<br>";
sort($numbers);
echo "Ascending: " . implode(", ", $numbers) . "<br>";
rsort($numbers);
echo "Descending: " . implode(", ", $numbers);
?>
