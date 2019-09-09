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
    echo "<p>Contribution: '$' $contribution</p>";
    echo "<p>Comment: $comments</p>";
    
    // output for yesno signed up for mailing
    if(isset($_POST['yesno']) && $_POST['yesno'] == 'yes') {
        
        echo "<p>Mailing: Signed up for mailing!</p>";
        
    } else { 
    
        echo "<p>Mailing: Did not sign up for mailing</p>";
        
    }
    
    // output for interests
    
    if(!empty($_POST['interest'])) {
// Counting number of checked checkboxes.
    $interest = count($_POST['interest']);
    echo "You have selected following ".$interest." option(s): <br/>";
    }
// Loop to store and display values of individual checked checkbox.
    foreach($_POST['interest'] as $selected) {
    echo "<p>".$selected ."</p>";
    }
    else{
    echo "<b>Please Select Atleast One Option.</b>";
    }
    

  
  
  
    
?>