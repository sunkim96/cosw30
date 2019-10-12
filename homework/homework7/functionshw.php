<?php
 function addtwo($a = 0, $b = 0)
 {
 return ($a + $b);
 }
 $value1 = $_POST['value1'];
 $value2 = $_POST['value2'];
 
 function subtwo($c = 0, $d = 0)
 {
 return ($c - $d);
 }
 $value3 = $_POST['value3'];
 $value4 = $_POST['value4'];
 
 
?>
<html>
 <title>PHP Formulas</title>
 <body>
 <form action="functionshw.php" method="post">
 <input type="text" name="value1" value="0" />
 <input type="text" name="value2" value="0" />
 <input type="submit" value="Calculate values"/>

 <?php
 echo $value1 . " + " . $value2 . " = ";
 echo addtwo($value1+$value2); 
 ?>

 <input type="text" name="value3" value="0" />
 <input type="text" name="value4" value="0" />
 <input type="submit" value="Calculate values"/>
 </form>
 <?php
 echo $value3 . " - " . $value4 . " = ";
 echo subtwo($value3-$value4); 
 ?>
 </body>
</html>