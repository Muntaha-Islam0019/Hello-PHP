<!DOCTYPE html>
<html lang="en">
<body>

<h3>
    Conditional Statements in PHP
</h3>

<?php

// If-else-elseif Statement
// Current hour is stored from built in function.
$c_time = date("H");

if ($c_time < "10")
    echo "Good Morning!<br>";
elseif ($c_time > "20")
    echo "Good Night!<br>";
else echo "Good Day!<br>";

// Switch statement
switch ($c_time) {
    case "12":
        echo "It's Midday!<br>";
        break;
    case "00":
        echo "It's Midnight!<br>";
        break;
    default:
        echo "It's a nice day!<br>";
}

?>

</body>
</html>