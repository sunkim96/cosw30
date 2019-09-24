<?php

$text = $_POST['text'];
$quote = array($text);
$count = count($quote);
// output the list originally with count
echo "Your Original Quote: $quote $count";

// output the list alphabetized
sort($quote);
for($i = 0; $i < $count; $i++) {
    echo $quote[$i];
    echo "<br>";
}



?>