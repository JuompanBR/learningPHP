<?php
/** @var string $name*/
$name = "Juompan Goummo Bill";

/** @var int $age */
$age = 22;

echo "My name is Goummo Bill Boris";

function marks() {

    $name = "Name Changed to something else";
    echo "<br>My name is".$name;
}

echo marks().marks();
?>