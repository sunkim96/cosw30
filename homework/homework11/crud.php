<?php
// Add the database connection
include('database.php');


if($_SERVER['REQUEST_METHOD'] == 'POST') {

$errors = [];

if (empty($_POST['first_name'])) {
    $errors[] = "You forgot to enter your first name.";
} else {
    $fn = trim($_POST['first_name']);
}
if (empty($_POST['last_name'])) {
    $errors[] = "You forgot to enter your last name.";
} else {
    $ln = trim($_POST['last_name']);
}

if (empty($_POST['email'])) {
    $errors[] = "You forgot to enter your email.";
} else {
    $e = trim($_POST['email']);
}
}
if (!empty($_POST['pass1'])) {
    if($_POST['pass1'] != $_POST['pass2']){
    $errors[] = "Your password did not match the confirmed password.";
    } else {
    $p = trim($_POST['pass1']);
    }
} else {
    $errors[] = "You forgot to enter your password.";

}

if (empty($errors)) {
    require('database.php');

    $q = "INSERT INTO USER_KIM (first_name, last_name, email, pass1) VALUES
    ('$fn', '$ln', '$e', SHA2('$p', 512), NOW() )";
    $r = @mysqli_query($dbc, $q);

    if ($r) {
        echo "<h1> Thank you!</h1> <p> You are now registered!</p>";
    } else {
        echo "<p>You were not able to register, please try again!</p>";
    }
mysqli_close($dbc);
exit();

}

?>

<h1>Register</h1>

<form action="crud.php" method="POST">
    <p>First Name: <input type="text" name="first_name"
    value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>"></p>
    <p>Last Name: <input type="text" name="last_name"
    value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>"></p>
    <p>Email: <input type="email" name="email"
    value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"></p>
    <p>Password: <input type="password" name="pass1"
    value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>"></p>
     <p>Confirm Password: <input type="password" name="pass2"
    value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>"></p>

        <button>Register</button>
    </form>
