<?php

include 'connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];


    // Query to check if the username and password match in the database
    $sql = "SELECT * FROM registrationdetails WHERE Uname = '$username' AND Password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        session_start();
        $_SESSION["username"]=$username;

        // Check if the user is an admin
        $row = $result->fetch_assoc();
        if ($_SESSION["username"] =="Admin") {
            $_SESSION['role'] = 'admin'; // Assign 'admin' role
        } else {
            $_SESSION['role'] = 'user'; // Assign 'user' role (you can define other roles if needed)
        }
        // Redirect to the dashboard or any other page upon successful login
        header("Location: index.php");
    } else {
        // Handle incorrect username or password
       echo "Incorrect username or password. Please try again.";
    }

}

// Close the database connection
$conn->close();
?>
