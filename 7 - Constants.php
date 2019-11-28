<!DOCTYPE html>
<html lang="en">
<body>

<h3>
    Constants
</h3>

<?php

// Constant works nearly as a global value, which can't be varied.
define("Moony", "Noob", true); // Constant, Value, Case-Insensitive

function a_func() {
    echo Moony . " loves ";
}

a_func();

// Creating constant arrays is possible too!
define("Foods_I_Love",
    ["Noodles", "Banana", "French Fry", "Chicken Fry"]
); // Case-Insensitivity is false by default.
echo Foods_I_Love[3] . ".<br>";

?>

</body>
</html>