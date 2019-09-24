<?php

$text = $_POST['text'];
 $textExplode = explode(' ', $text);
$count = count($textExplode);
// output the list originally with count
echo "Your Original Quote: $textExplode $count";

// output the list alphabetized
sort($textExplode);
for($i = 0; $i < $count; $i++) {
    echo "<p>Your Quote Alphabetized: </p>";
    echo $textExplode[$i];
    echo "<br>";
}



?>