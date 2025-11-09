<?php
$text = "Hello Rutvi! Welcome to PHP.";

// Length
echo "Length: " . strlen($text) . "<br>";

// Word count
echo "Word Count: " . str_word_count($text) . "<br>";

// Reverse
echo "Reversed: " . strrev($text) . "<br>";

// Replace
echo "Replace: " . str_replace("PHP", "Programming", $text);
?>
