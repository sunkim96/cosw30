<?php
    $first_name = $POST['first_name'];
    $last_name = $POST['last_name'];
    $email = $_POST['email'];
    $gender = $POST['gender'];
    $age = $POST['age'];
    $interest = $POST['interest'];
    $contribution = $POST['contribution'];
    $yesno = $POST['yesno'];
    $comments = $POST['comments'];
    
    echo "<h1>Thank you $first_name for filling out this form!</h1>";
    
    echo "<p>First Name: $first_name</p>";
    echo "<p>Last Name: $last_name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Gender: $gender</p>";
    echo "<p>Age: $age</p>";
    echo "<p>Interests: $interest</p>";
    echo "<p>Contribution: $contribution</p>";
    echo "<p>Signed up for mailing: $yesno</p>";
    echo "<p>Comment: $comments</p>";
    
    
  
  
  
  
    
?>