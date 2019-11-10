<!DOCTYPE html>
<html lang="en">
<body>

<h3>
    Methods in String
</h3>

<?php

    $a_var = "The only verdict is vengeance.";

    echo "The length is the string is: " . strlen($a_var). ".<br>";
    echo "The word count in the string is: "
        . str_word_count($a_var). ".<br>";
    echo "Reverse: " . strrev($a_var) . ".<br>";
    echo "Verdict is in: " . strpos($a_var, "verdict")
        . " position.<br>";
    echo "The string in other words: " .
        str_replace("verdict", "adjudication", $a_var) . ".<br>";

?>

</body>
</html>