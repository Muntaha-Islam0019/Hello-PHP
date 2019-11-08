<!DOCTYPE html>
<html lang="en">
<body>

<h3>
    Variables in PHP.
</h3>

<?php

    // Variables are declared by Dollar signs.
    $a_variable = "A value";

    // Variables can be printed in 2 ways:
    echo "Value of the variable: $a_variable.<br>";
    // Or
    echo "Value of the variable: " . $a_variable . ".<br>";

    $a_number = 19;
    $another_number = 47;

    echo $a_number + $another_number;

    /* Though, PHP is a loosely typed language, type declarations were
     * added in PHP 7.
     */

?>

</body>
</html>