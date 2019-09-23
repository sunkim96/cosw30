<?php

$text = $_POST['text'];


//output as original
echo "Your Original Quote:";
echo $text;
echo count($text);


//output the list alphabetized
echo "Your Quote Alphabetized:";
echo sort($text);


//output the list reverse alphabetized 
echo "Your Quote In Reverse";
echo rsort($text);


// add three new words, output text w/new array and count
$great = array("Wow", "Amazing", "Great Job");

echo "Some Additional Words:";
echo $text;
echo $great;
echo count($text, $great); 





?>