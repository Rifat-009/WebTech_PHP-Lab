<?php

echo "<h1>PHP Built-in Functions Practice</h1>";


// 1. strlen() // Counts the number of characters in a string.

$name = "Rifat";
echo "1. strlen: " . strlen($name) . "<br>";


// 2. str_word_count() // Counts the number of words in a string.

$text = "PHP programming is fun.";
echo "2. str_word_count: " . str_word_count($text) . "<br>";


// 3. str_contains() // Checks whether a string contains another string.

$text = "PHP is a popular programming language.";
echo "3. str_contains: ";
echo str_contains($text, "PHP") ? "Yes" : "No";
echo "<br>";


// 4. strpos() // Finds the position of a word or character.

$text = "Hola PHP";
echo "4. strpos: " . strpos($text, "PHP") . "<br>";


// 5. strtoupper() // Converts a string to uppercase.

$name = "rifat";
echo "5. strtoupper: " . strtoupper($name) . "<br>";


// 6. strtolower() // Converts a string to lowercase.

$name = "RIFAT";
echo "6. strtolower: " . strtolower($name) . "<br>";


// 7. str_replace() // Replaces text with another text.

$text = "Java is a programming language.";
echo "7. str_replace: " . str_replace("Java", "PHP", $text) . "<br>";


// 8. strrev() // Reverses a string.

$text = "Hello PHP";
echo "8. strrev: " . strrev($text) . "<br>";


// 9. trim() // Removes spaces from the beginning and end.

$text = "  Hello World  ";
echo "9. trim: " . trim($text) . "<br>";


// 10. explode() // Converts a string into an array.

$text = "Apple,Banana,Mango,Orange,Grapes";
$fruits = explode(",", $text);

echo "10. explode: ";
print_r($fruits);
echo "<br><br>";


// 11. implode() // Converts an array into a string.

$fruits = array("Apple", "Banana", "Mango", "Orange", "Grapes");

echo "11. implode: " . implode(", ", $fruits) . "<br>";


// 12. substr() // Returns a part of a string.

$text = "Hello PHP";
echo "12. substr: " . substr($text, 0, 5) . "<br>";


// 13. is_int() // Checks whether a value is an integer.

$number = 999;

echo "13. is_int: ";
echo is_int($number) ? "True" : "False";
echo "<br>";


// 14. is_float() // Checks whether a value is a float.

$number = 999.99;

echo "14. is_float: ";
echo is_float($number) ? "True" : "False"; 
echo "<br>";


// 15. is_nan() // Checks whether a value is Not a Number.

$number = acos(999); 

echo "15. is_nan: ";
echo is_nan($number) ? "True" : "False";
echo "<br>";


// 16. is_numeric() // Checks whether a value is numeric.

$number = "123";

echo "16. is_numeric: ";
echo is_numeric($number) ? "True" : "False";
echo "<br>";


// 17. round() // Rounds a decimal number.

$number = 999.99;

echo "17. round: " . round($number) . "<br>";


// 18. define() // Creates a constant.

define("COLLEGE", "AIUB");

echo "18. define: " . COLLEGE . "<br>";


// 19. date() // Displays the current date.

echo "19. date: " . date("Y-m-d") . "<br>";


// 20. strtotime() // Converts a date string into a timestamp.

$date = strtotime("2026-08-10");

echo "20. strtotime: " . $date . "<br>";


// 21. time() // Returns the current timestamp.

echo "21. time: " . time() . "<br>";


// 22. date_default_timezone_set() // Sets the default timezone.

date_default_timezone_set("Asia/Dhaka");

echo "22. date_default_timezone_set: ";
echo date("Y-m-d H:i:s");
echo "<br>";


// 23. date_default_timezone_get() // Gets the current timezone.

echo "23. date_default_timezone_get: ";
echo date_default_timezone_get();
echo "<br>";


// 24. include() // Includes another PHP file.

echo "24. include: ";
include "include_file.php";
echo "<br>";


// 25. require() // Includes another PHP file.

echo "25. require: ";
require "require_file.php";
echo "<br>";


// 26. json_encode() // Converts PHP data into JSON.

$student = array(
    "name" => "Rifat",
    "age" => 23
);

$json = json_encode($student);

echo "26. json_encode: " . $json . "<br>";


// 27. json_decode() // Converts JSON into PHP data.

$data = '{"name":"Rifat","age":23}';

$student = json_decode($data, true);

echo "27. json_decode: ";
echo $student["name"];
echo "<br>";


// 28. array() // Creates an array.

$colors = array("Green", "Blue", "Red", "Yellow");

echo "28. array: ";
print_r($colors);
echo "<br><br>";


// 29. array_keys() // Returns all keys of an array.

$student = array(
    "name" => "Rifat",
    "age" => 23
);

echo "29. array_keys: ";
print_r(array_keys($student));
echo "<br><br>";


// 30. array_merge() // Merges two or more arrays.

$array1 = array("Apple", "Banana");
$array2 = array("Beef", "Chicken", "Mutton");

$result = array_merge($array1, $array2);

echo "30. array_merge: ";
print_r($result);
echo "<br><br>";


// 31. array_push() // Adds one or more elements to the end of an array.

$fruits = array("Apple", "Banana");

array_push($fruits, "orange", "Grapes");

echo "31. array_push: ";
print_r($fruits);
echo "<br><br>";


// 32. array_reverse() // Reverses an array.

$numbers = array(1, 2, 3, 4, 5);

$reverse = array_reverse($numbers);

echo "32. array_reverse: ";
print_r($reverse);
echo "<br><br>";


// 33. sizeof() // Returns the number of elements in an array.

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

echo "33. sizeof: " . sizeof($numbers) . "<br>";


// 34. count() // Counts the number of elements in an array.

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

echo "34. count: " . count($numbers) . "<br>";


// 35. sort() // Sorts an array in ascending order.

$numbers = array(3,5,1,4,2);

sort($numbers);

echo "35. sort: ";
print_r($numbers);

?>