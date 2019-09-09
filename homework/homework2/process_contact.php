<?php
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $interest = $_POST['interest'];
    $contribution = $_POST['contribution'];
    $yesno = $_POST['yesno'];
    $comments = $_POST['comments'];
    
    echo "<h1>Thank you $first_name , for filling out this form!</h1>";
    
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