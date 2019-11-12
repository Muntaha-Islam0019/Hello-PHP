<!DOCTYPE html>
<html lang="en">
<body>

<h3>
    Arrays
</h3>

<?php

// A simple array.
$an_array = array("Hello", "World");
echo $an_array[0] . "<br>";

// There are 3 types of arrays in PHP.
// Indexed: simple arrays.
$array_one = array(1, 2, 3, 4, 5);

// Associative: like maps.
$array_two = array("Muntaha" => 1, "Ashik" => 2, "Alvee" => 3,
    "Omi" => 4, "Roza" => 5);

// Multidimensional.
$array_three =
    array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );

// Count is to find the array length
echo count($array_three) . "<br>";

/*
 * There are 6 way of sorting an array:
 * - sort()
 * - rsort() - reverse
 * - asort() - by values
 * - ksort() - by keys
 * - arsort() - reverse by values
 * - krsort() - reverse by keys
 */

?>

</body>
</html>