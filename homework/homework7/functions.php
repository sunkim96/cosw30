<?php
$name = ["Ele", "Diana", "Bayleigh", "Patrick", "Ryan"];

$nametest = "Mario";

function greeting($nametest) {
    echo "<p>Hello, my name is '$nametest'</p>";
}

foreach ($names as $name) {
    greeting($name);
}
?>

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
 
  function multitwo($e = 0, $f = 0)
 {
 return ($e * $f);
 }
 $value5 = $_POST['value5'];
 $value6 = $_POST['value6'];
 
 
?>
<html>
 <title>PHP Formulas</title>
 <body>
     <h3>Want to Add?</h3>
     <br>
 <form action="functionshw.php" method="post">
 <input type="text" name="value1" value="0" />
 <input type="text" name="value2" value="0" />
 <input type="submit" value="Calculate values"/>

 <?php
 echo $value1 . " + " . $value2 . " = ";
 echo addtwo($value1+$value2); 
 ?>
 <br>
     <h3>Want to Subtract?</h3>
     <br>
 <input type="text" name="value3" value="0" />
 <input type="text" name="value4" value="0" />
 <input type="submit" value="Calculate values"/>
 
 <?php
 echo $value3 . " - " . $value4 . " = ";
 echo subtwo($value3-$value4); 
 ?>
  <br>
      <h3>Want to Multiply?</h3>
      <br>
 <input type="text" name="value5" value="0" />
 <input type="text" name="value6" value="0" />
 <input type="submit" value="Calculate values"/>
 
 <?php
 echo $value5 . " * " . $value6 . " = ";
 echo multitwo($value5*$value6); 
 ?>
 </form>
 </body>
</html>