<?php
include 'connection.php';
include 'header.php';

// Query to fetch all usernames
$sql = "SELECT id,Uname,Email FROM registrationdetails WHERE Uname != 'Admin'";
$result = $conn->query($sql);

?>


<head>
    <style>
    table tr td {
        border: 1px solid;
        padding: 5px;
        font-size: large;
        font-family: Georgia, 'Times New Roman', Times, serif;
        color: black;
    }

    .Table table{
        margin:auto;
        border: 2px solid black;
    }

    .Table h2{
        font-size: xx-large;
        font-family: Georgia, 'Times New Roman', Times, serif;
        color:black;
    }

    tr:nth-child(odd){
        background: linear-gradient(aquamarine,gray);
    }
    </style>
</head>

<body>
    <div class="container-fluid loginform">
        <div class="row pt-4">
            <div class="Table">
                <h2 class="text-center pb-4">WEBSITE USERS</h2>
                <table class="text-center">
                    <?php
        // Check if there are any usernames in the result
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td >" . $row["id"] . "</td><td >" . $row["Uname"] . "</td> <td>" . $row["Email"] . "</td></tr>";
            }
        } else {
            echo "<tr><td>No user found</td></tr>";
        }
        ?>
                </table>

                <?php
    // Close connection
    $conn->close();

    ?>
            </div>
        </div>
    </div>
    <?php include  "footer.php"?>
</body>

</html>