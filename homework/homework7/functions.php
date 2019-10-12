<?php
$name = ["Ele", "Diana", "Bayleigh", "Patrick", "Ryan"];

$nametest = "Mario";

function greeting($nametest) {
    echo "<p>Hello, my name is '$nametest'</p>";
}

foreach ($names as $name) {
    greeting($name);
}
?>