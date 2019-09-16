<?php

$residency = $_POST['residency'];
$units = $_POST['units'];
$service = $_POST['service'];
$parking = $_POST['parking'];
$healthfee = $_POST['healthfee'];
$scholar = rand(10, 100);
$tuition = $residency * $units;

$total = $service + $parking + $healthfee + $tuition;
$total2 = $total - $scholar;

echo "<p>Cost of Tuition: $ $tuition</p>";

echo "<p>Health Fee: $ $healthfee</p>";

echo "<p>College Services Card: $ $service</p>";

echo "<p>Parking Permit: $ $parking</p>";

echo "<p>Total Registration Costs: $ $total</p>";

echo "<p>Academic Scholarship: $ $scholar</p>";

echo "<p>Total Due: $ $total2</p>";


?>