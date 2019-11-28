<!DOCTYPE html>
<html>
<body>

<h3>
    Loops in PHP
</h3>

<?php

// While loop:

echo  "Usage of While loop: <br>";

$x = 0;

while($x <= 100) {
    echo "The number is: $x,<br>";
    $x+=10;
}

// Do-While Loop:

echo  "Usage of Do-While loop: <br>";

$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

// For Loop:

echo  "Usage of For loop: <br>";

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

// For-Each Loop:

echo  "Usage of For-Each loop: <br>";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}
?>

</body>
</html>