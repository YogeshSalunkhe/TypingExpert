<?php
// Include the database connection file
include 'connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // You should perform validation and sanitization of data here before inserting into the database

    // Prepare and execute the SQL statement to insert data into the database
    $sql = "INSERT INTO registrationdetails (Uname, Email, Password) VALUES ('$fullname', '$email', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        // Data inserted successfully
        // echo "New record created successfully";
        header("Location: login.php");
    } else {
        // Error occurred while inserting data
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
