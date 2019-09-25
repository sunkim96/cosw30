<?php

$multiarray = array 
    ( 
        array("city state"=>"New York, New York", "population"=>8622698),
        array("city state"=>"Los Angeles, California", "population"=>3999759),
        array("city state"=>"Chicago, Illinois", "population"=>2716450),
        array("city state"=>"Houston, Texas", "population"=>2312717),
        array("city state"=>"Phoenix, Arizona", "population"=>1626078),
        array("city state"=>"Philadelphia, Pennsylvania", "population"=>1580862),
        array("city state"=>"San Antonia, Texas", "population"=>1511946),
        array("city state"=>"San Diego, California", "population"=>1419516),
        array("city state"=>"Dallas, Texas", "population"=>1341075),
        array("city state"=>"San Jose, California", "population"=>1035317),
        array("city state"=>"Austin, Texas", "population"=>950715),
        array("city state"=>"Jacksonville, Florida", "population"=>892062),
        array("city state"=>"San Francisco, California", "population"=>884363),
        array("city state"=>"Columbus", "population"=>879170),
        array("city state"=>"Fort Worth", "population"=>874168)
    
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
array_multisort($multiarray, SORT_ASC);
$count = 0;

foreach ($multiarray as $arrays){
    $count++;
    echo "<table>" ;               

    echo "<span>Rank $count</span>";
    echo "<tr>";
    foreach ($arrays as $citystate => $population){

        echo "<th>$citystate</th>";
        echo "<td>$population</td>";

    }
    echo "</tr>";
    echo "</table>";
}


$secondarray = array 
    ( 
        array("city state"=>"New York, New York", "population"=>8622698),
        array("city state"=>"Los Angeles, California", "population"=>3999759),
        array("city state"=>"Chicago, Illinois", "population"=>2716450),
        array("city state"=>"Houston, Texas", "population"=>2312717),
        array("city state"=>"Phoenix, Arizona", "population"=>1626078),
        array("city state"=>"Philadelphia, Pennsylvania", "population"=>1580862),
        array("city state"=>"San Antonia, Texas", "population"=>1511946),
        array("city state"=>"San Diego, California", "population"=>1419516),
        array("city state"=>"Dallas, Texas", "population"=>1341075),
        array("city state"=>"San Jose, California", "population"=>1035317),
        array("city state"=>"Austin, Texas", "population"=>950715),
        array("city state"=>"Jacksonville, Florida", "population"=>892062),
        array("city state"=>"San Francisco, California", "population"=>884363),
        array("city state"=>"Columbus", "population"=>879170),
        array("city state"=>"Fort Worth", "population"=>874168)
    
    );



array_multisort($secondarray, SORT_ASC);
$count = 0;

foreach ($secondarray as $arrays){
    $count++;
    echo "<table>" ;               

    echo "<span>Rank $count</span>";
    echo "<tr>";
    foreach ($arrays as $citystate => $population){

        echo "<th>$citystate</th>";
        echo "<td>$population</td>";

    }
    echo "</tr>";
    echo "</table>";
}



?>