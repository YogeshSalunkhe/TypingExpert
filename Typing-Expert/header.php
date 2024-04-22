<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Typing Expert</title>
</head>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <span class="nav-brand">
            <a class="navbar-brand ms-2 ms-lg-5" href="index.php">Typing Expert</a>
        </span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About us</a>
                </li>
                <?php
                // Check if the user is logged in
                session_start();
                if (isset($_SESSION['username'])) {
                    echo '<li class="nav-item">
                                <a class="nav-link" href="learning-level.php">Learning Levels</a>
                            </li>';
                    if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
                        echo '<li class="nav-item">
                                    <a class="nav-link" href="manage-site.php">Manage Site</a>
                                </li>';
                    }
                }
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="feedback.php">Give Feedback</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="our-users.php">Our Users</a>
                </li>
                <?php
                // Check if the user is logged in
                if (isset($_SESSION['username'])) {
                    echo '<li class="nav-item">
                                <a class="btn btn-danger" href="logout.php">Logout</a>
                            </li>';
                } else {
                    echo '<li class="nav-item">
                                <a class="btn btn-danger" href="login.php">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-warning" href="registration.php">Sign Up</a>
                            </li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

<!-- End Nav Bar-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script>
    // Check if user is logged in (you need to implement this logic)
    var isLoggedIn = false; // Change this to true if the user is logged in

    // Show appropriate links based on login status
    if (isLoggedIn) {
        $('#loginLink').hide();
        $('#signupLink').hide();
        $('#logoutLink').show();
    } else {
        $('#loginLink').show();
        $('#signupLink').show();
        $('#logoutLink').hide();
    }
</script>

</html>