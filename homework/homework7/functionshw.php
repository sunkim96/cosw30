<!doctype html>
<html>
 <head>
        <meta charset="utf-8">
        <title></title>
    <style></style>
    
    
    <body>
   <form action="functionshw.php" method="post" class="form-inline">
       <label></label>
       <input type="text" name="firstvalue" value="<?php echo $firstvalue; ?>" placeholder="Insert Here" />
  
     
      <select size="1" name="operations">
         <option value="+">+</option>
         <option value="-">-</option>
         <option value="*">*</option>
         <option value="/">/</option>
      </select>
     
     <input type="text" name="secondvalue" value="<?php echo $secondvalue; ?>" placeholder="Insert Here" />
  
     <button type="submit" name="calculate">Calculate</button>
     
     <?php
     $firstvalue = $_POST['firstvalue'];
     $secondvalue = $_POST['secondvalue'];
     
     
     
     
      if ($_REQUEST['operations'] == '+')
      	{
      	  
          echo $firstvalue + $secondvalue; 
   
      }
      elseif ($_REQUEST['operations'] == '-')
      { 
      	   
          echo $firstvalue - $secondvalue;
  
      }
      elseif ($_REQUEST['operations'] == '*')
      {
      	
       echo $firstvalue * $secondvalue;  

      }
      elseif ($_REQUEST['operations'] == '/')
      { 
      	
        echo $firstvalue / $secondvalue; 
 
      } ?>
     
     
     
     
     </form>
     
    </body>

 
</html>