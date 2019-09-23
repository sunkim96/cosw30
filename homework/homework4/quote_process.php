<?php

$text = $_POST['text'];

$textExplode = explode(' ', $text);

$textlength = count($text);

//output as original
echo "<p>Your Original Quote:</p>";
echo $textExplode;
echo $textlength;


//output the list alphabetized
echo "<p>Your Quote Alphabetized:</p>";
sort($text);

for($i = 0; $i < $textlength; $i++) {
    echo $text[$i];
    echo "<br>";
}


//output the list reverse alphabetized 
echo "<p>Your Quote In Reverse</p>";
rsort($text);

for($i = 0; $i < $textlength; $i++) {
    echo $text[$i];
    echo "<br>";
}


// add three new words, output text w/new array and count
$great = array("Wow", "Amazing", "Great Job");

echo "<p>Some Additional Words:</p>";
echo $textExplode;
for($i = 0; $i < $textlength; $i++) {
    echo $text[$i];
    echo $great;
}
echo $textlength; 


?>