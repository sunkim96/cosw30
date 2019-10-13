<!doctype html>
<html>
 <head>
        <meta charset="utf-8">
        <title>Function Machine</title>
    <style>
     @import url('https://fonts.googleapis.com/css?family=Mansalva&display=swap');
body{
   background-color: black;
}
div {
 border-style: solid;
 border-radius: 4px;
 border-color: orange;
 border-width: 7px;
 margin: 40px;
 padding: 40px;
 font-family: 'Mansalva', cursive;
 background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3Ih7FitB4f_6k-LiZItfG8k7FlXsUAuqlXyEa6sKV4Qdny9QB");
  background-position: 50px; 
  background-repeat: no-repeat;
  
}
form {
   text-align: center;
   margin: 30px 30px 30px 30px;
   font-family: 'Mansalva', cursive;
   
}
h1 {
   text-align: center;
   color: orange;
}
button {
   font-family: 'Mansalva', cursive;
   color: orange;
   background-color: black;
   margin: 30px;
   padding: 13px 25px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   border-radius: 7px;
   font-size: 20px;
}
input {
   border-radius: 7px;
   padding: 6px;
   margin: 6px;
   font-family: 'Mansalva', cursive;
   font-size: 15px;
   background-color: black;
   color: orange;
}

select {
   padding: 6px;
   margin: 6px;
   background-color: black;
   color: orange;
  
}
     
    </style>
    
    
    <body>
       
    <div>
       <h1>Spooky Math</h1>
   <form action="functionshw.php" method="post" class="form-inline">
       <input type="text" name="firstvalue" value="<?php echo $firstvalue; ?>" placeholder="Insert Here" />
  
     
      <select size="1" name="operations">
         <option value="+">+</option>
         <option value="-">-</option>
         <option value="*">*</option>
         <option value="/">/</option>
      </select>
     
     <input type="text" name="secondvalue" value="<?php echo $secondvalue; ?>" placeholder="Insert Here" />
  <br>
     <button type="submit" name="calculate">Calculate</button>
     
<?php
     $firstvalue = $_POST['firstvalue'];
     $secondvalue = $_POST['secondvalue'];
     
     
     
     
      if ($_REQUEST['operations'] == '+')
      	{
      	   echo "<p>Boo! This is your answer!</p>";
      	   echo "$firstvalue + $secondvalue =";
      	   echo $firstvalue + $secondvalue ;
          
      }
      elseif ($_REQUEST['operations'] == '-')
      { 
      	   echo "<p>Boo! This is your answer!</p>";
          echo "$firstvalue - $secondvalue =";
      	   echo $firstvalue - $secondvalue ;
  
      }
      elseif ($_REQUEST['operations'] == '*')
      {
      	  echo "<p>Boo! This is your answer!</p>";
         echo "$firstvalue * $secondvalue =";
      	  echo $firstvalue * $secondvalue ;
           

      }
      elseif ($_REQUEST['operations'] == '/')
      { 
      	 echo "<p>Boo! This is your answer!</p>";
        echo "$firstvalue / $secondvalue = ";
      	 echo $firstvalue / $secondvalue ;
      } ?>
     
     
     
     
     </form>
       </div>
    </body>

 
</html>