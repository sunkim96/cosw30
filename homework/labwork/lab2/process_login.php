<?php


    // capture data from our form
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // create variable to match our email and password against
    $correct_email = 'test@test.com';
    $correct_password = 'supersecure123';
    
    
    // check if the data is good(isn't empty, matches our credentials)
    # == is equal to
    # != is not equal to
    # && and
    if ($email == $correct_email && $password == $correct_password) {
        // successful message
        echo '<h1>You logged in successfully!';
        echo "<p>Email Address: $email</p>";
        echo "<p>Password: $password</p>";
    }
    
        else {
            // output an error message
            echo '<h1>Sorry, try again!</h1>';
            echo '<a href ="login.php">Go back</a>';
            }
    // output a little message for fun!
?>