<?php

$residency = $_POST['residency'];
$units = $_POST['units'];
$service = $_POST['service'];
$parking = $_POST['parking'];
$healthfee = $_POST['healthfee'];
$number = rand($min, $max);

if ($residency == 46) {
    echo "Cost of Tuition: $units + $residency";
} else {
    echo "Cost of Tuition: $units + $residency";
}

echo "Health Fee: $healthfee";

echo "College Services Card: $service";

echo "Parking Permit: $parking";

echo "Total Registration Costs: $residency + $healthfee + $service + $parking";

echo "Academic Scholarship: $number";

echo "Total Due: $residency + $healthfee + $service + $parking - $number";


?>