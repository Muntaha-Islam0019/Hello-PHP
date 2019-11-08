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
    echo "<br>";

    /* Though, PHP is a loosely typed language, type declarations were
     * added in PHP 7.
     */

    /* Variable scopes in PHP can be differentiated in 3 different ways:
     * Local,
     * Global,
     * Static.
     */

    $x = 5;
    $w = 10;
    $v = 25;

    function A_Func() {

        $z = 15;

        // This line is gonna return an error.
        // echo "Variable x is: $x";
    }

    // Also, this is gonna return an error too.
    // echo "Variable z is: $z";

    /* So, by default we can't use local variables on global scope and
     * global variables on local scope.
     */

    // This can be solved by using:
    function Another_Func() {

        global $w;
        echo "Variable w is: $w.<br>";

        // Or,
        $new_var = $GLOBALS['v'];
        echo "Variable v is $new_var.<br>";
    }

    Another_Func();

    function Last_Func() {
        static $y = 10;
        echo "Variable y is: $y.<br>";
        $y++;
    }

    Last_Func();
    Last_Func();
    Last_Func();
    /* As, you can see, the value of y is changing after each call, this only
     * happens when the function is static.
     */
?>

</body>
</html>