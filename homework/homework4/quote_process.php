<?php

$text = $_POST['text'];


//output as original
echo "<p>Your Original Quote:</p>";
echo $text;
count($text);


//output the list alphabetized
echo "<p>Your Quote Alphabetized:</p>";
sort($text);


//output the list reverse alphabetized 
echo "<p>Your Quote In Reverse</p>";
rsort($text);


// add three new words, output text w/new array and count
$great = array("Wow", "Amazing", "Great Job");

echo "<p>Some Additional Words:</p>";
echo $text;
echo $great;
count($text, $great); 





?>