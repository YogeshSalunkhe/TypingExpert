<?php
// Include the database connection file
include 'connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $satisfaction = $conn->real_escape_string($_POST['flexRadioDefault']);
    $liked_most = $conn->real_escape_string($_POST['liked_most']);
    $improvement = $conn->real_escape_string($_POST['improvement']);

    // Insert feedback into database
    $sql = "INSERT INTO feedback (Choice, Likecontent, Improvent) VALUES ('$satisfaction', '$liked_most', '$improvement')";

    if ($conn->query($sql) === TRUE) {
        echo "Feedback submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
