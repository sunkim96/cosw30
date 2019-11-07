<?php
// Add the database connection
include('database.php');
/*   CHECK IF THE FORM HAS BEEN SUBMITTED AND INSERT
*    NEW USER INTO THE DATABASE
*/
if($_SERVER['REQUEST_METHOD'] == 'POST') {
}
/*
*   QUERY THE DATABASE AND STORE ALL USERS INTO A VARIABLE
*/
// Create your query
$query = 'SELECT * FROM USER_KIM';
// Run your query
$result = mysqli_query($connection, $query);
// Check if the database returned anything
if($result) {
    while($row = mysqli_fetch_array($result)){
        // Output the results
        $username = mysqli_fetch_assoc($result);
    }
} else {
    // Output an error
}
?>

<!doctype html>
<html>
<head>
    <title>My First CRUD</title>
</head>
<body>
    <form action="crud.php" method="POST">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name">

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name">

        <label for="email">Email</label>
        <input type="email" id="email" name="email">

        <label for="password">Password</label>
        <input type="password" id="password" name="password">

        <!--Add a second password input so the user has to retype their password -->

        <button>Register</button>
    </form>

    <h2>Output a List of Users</h2>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($rows as $row){
            echo '<tr>
                <td>'.$row['first_name'].'</td>
                <td>'.$row['last_name'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['password'].'</td>
                <td><a href="crud2.php?id='.$row['user_id'].'">Edit</a></td>
            </tr>';
            ?>
        </tbody>
    </table>
</body>
</html>