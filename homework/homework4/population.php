<?php

$city = array 
    ( 
        array("New York, New York", 8622698),
        array("Los Angeles, California", 3999759),
        array("Chicago, Illinois", 2716450),
        array("Houston, Texas", 2312717),
        array("Phoenix, Arizona", 1626078),
        array("Philadelphia, Pennsylvania", 1580862),
        array("San Antonia, Texas", 1511946),
        array("San Diego, California", 1419516),
        array("Dallas, Texas", 1341075),
        array("San Jose, California", 1035317),
        array("Austin, Texas", 950715),
        array("Jacksonville, Florida", 892062),
        array("San Francisco, California", 884363),
        array("Columbus", 879170),
        array("Fort Worth", 874168)
    
    );


for ($row = 0; $row < 15; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 2; $col++) {
    echo "<li>".$city[$row][$col]."</li>";
  }
  echo "</ul>";
}





?>