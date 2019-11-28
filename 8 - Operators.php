<!DOCTYPE html>
<html lang="en">
<body>

<h3>
    Unique operators in PHP
</h3>

<?php

// Unique comparison operators
// Identical operator:
$x = 10;
$y = 15;
echo "Is X and Y identical: " . $x === $y;
echo "<br>";
echo "Is X and Y identical: " . $x !== $y;
echo "<br>";

// Spaceship:
$a = 10;
$b = 20;
$c = 20;
$d = 30;
echo $a<=>$b;
echo "<br>";
echo $b<=>$c;
echo "<br>";
echo $c<=>$d;
echo "<br>";

?>

</body>
</html>