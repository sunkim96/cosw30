<?php

$multiarray = array 
    ( 
        array("name"=>"New York, New York", "value"=>8622698),
        array("name"=>"Los Angeles, California", "value"=>3999759),
        array("name"=>"Chicago, Illinois", "value"=>2716450),
        array("name"=>"Houston, Texas", "value"=>2312717),
        array("name"=>"Phoenix, Arizona", "value"=>1626078),
        array("name"=>"Philadelphia, Pennsylvania", "value"=>1580862),
        array("name"=>"San Antonia, Texas", "value"=>1511946),
        array("name"=>"San Diego, California", "value"=>1419516),
        array("name"=>"Dallas, Texas", "value"=>1341075),
        array("name"=>"San Jose, California", "value"=>1035317),
        array("name"=>"Austin, Texas", "value"=>950715),
        array("name"=>"Jacksonville, Florida", "value"=>892062),
        array("name"=>"San Francisco, California", "value"=>884363),
        array("name"=>"Columbus", "value"=>879170),
        array("name"=>"Fort Worth", "value"=>874168)
    
    );


/*for ($row = 0; $row < 15; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 2; $col++) {
    echo "<li>".$city[$row][$col]."</li>";
  }
  echo "</ul>";
}
*/

$count = 0;

foreach ($multiarray as $arrays){
    $count++;
    echo "<table>" ;               

    echo "<span>table $count</span>";
    echo "<tr>";
    foreach ($arrays as $names => $value){

        echo "<th>$names</th>";
        echo "<td>$value</td>";

    }
    echo "</tr>";
    echo "</table>";
}




?>