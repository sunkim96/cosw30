<?php

$text = $_POST['text'];
 $textExplode = explode(' ', $text);
$count = count($textExplode);
// output the list originally with count
echo "Your Original Quote:";
echo "<p>$text</p>";
echo "<p>$count</p>";

// output the list alphabetized
sort($textExplode);
echo "<p>Your Quote Alphabetized: </p>";
for($i = 0; $i < $count; $i++) {
    echo $textExplode[$i];
    echo "<br>";
}

// output the list reverse alphabetized
rsort($textExplode);
echo "<p>Your Quote in Reverse: </p>";
for($i = 0; $i < $count; $i++) {
    echo $textExplode[$i];
    echo "<br>";
}

// add 3 words to the end output new array list with count
$new = array("You", "Got", "This");
echo "<p>New Words:</p>" . $new[0] . "" . $new[1] . "" . $new[2] . " " ;
echo "<br>";
echo "<p>$text</p>";
echo count($new);
echo "<br>";
echo count;


// remove first three letters 


?>