<!DOCTYPE html>
<html lang="en">
<body>

<h3>
    Classes & Objects
</h3>

<?php

class fruit {

    public $name;
    public $color;

    // $this refers to the current object.
    function set_name($name) {
        $this->name = $name;
    }

    function set_color($color) {
        $this->color = $color;
    }

    function get_info() {
        echo "It's a $this->name and it has $this->color color.<br>";
    }
}

$a_fruit = new fruit();
$a_fruit->set_name("Apple");
$a_fruit->set_color("Red");
$a_fruit->get_info();

// To check if an object belongs to a specific class:
var_dump($a_fruit instanceof fruit);

?>

</body>
</html>