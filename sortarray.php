<?php

// Store student names in an array
$students = array("Amit", "Riya", "John", "Meera", "Sanjay");
// Display original array using print_r()
echo "<h3>Original Array:</h3>";
echo "<pre>";
print_r($students);
echo "</pre>";
// Sort array in ascending order using asort()
$asc_students = $students; 
asort($asc_students);
echo "<h3>Sorted in Ascending Order (asort):</h3>";
echo "<pre>";
print_r($asc_students);
echo "</pre>";
// Sort array in descending order using arsort()
$desc_students = $students;  
arsort($desc_students);
echo "<h3>Sorted in Descending Order (arsort):</h3>";
echo "<pre>";
print_r($desc_students);
echo "</pre>";

?>
