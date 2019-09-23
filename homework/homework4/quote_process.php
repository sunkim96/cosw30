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

for($x = 0; $x < $textlength; $x++) {
    echo $text[$x];
    echo "<br>";


//output the list reverse alphabetized 
echo "<p>Your Quote In Reverse</p>";
rsort($text);

for($x = 0; $x < $textlength; $x++) {
    echo $text[$x];
    echo "<br>";


// add three new words, output text w/new array and count
$great = array("Wow", "Amazing", "Great Job");

echo "<p>Some Additional Words:</p>";
echo $textExplode;
for($x = 0; $x < $textlength; $x++) {
    echo $text[$x];
    echo "<br>";
}
echo $textlength; 





?>