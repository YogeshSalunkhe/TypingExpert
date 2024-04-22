<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Typing Expert</title>
    <style>
        h3 i {
            color: #008DDA;
        }

        .tips {
            font-family: 'Times New Roman', Times, serif;
            font-size: xx-large;
            font-weight: bolder;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <span class="nav-brand">
                <a class="navbar-brand ms-2 ms-lg-5" href="#">Typing Expert</a>
            </span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tips-techniques.php">Tips & Techniques</a>
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
    <!-- Slider -->
    <div class="container-fluid">
        <div class="row">
            <div id="carouselExampleAutoplaying" class="carousel slide py-2" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/new-typing.jpeg" class="d-block w-100" alt="..." height="510rem">
                        <div class="carousel-caption d-md-block">
                            <h3 class="animate__animated animate__heartBeat"><i>Increase your typing speed with Typing
                                    Experts</i></h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/Typing-demo.jpeg" class="d-block w-100" alt="..." height="510rem">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/keyboard-demo.jpeg" class="d-block w-100" alt="..." height="510rem">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <!-- End Slider-->
    <!-- Animated Div-->
    <div class="container-fluid animated-div">
        <div class="row animated-div">
            <center><h3 class="animate__animated animate__jello py-3">Welcome to Typing Expert !!!</h3>
        </div>
    </div>
    <!-- End Animated Div-->
    <!-- Motive -->
    <div class="container-fluid motive">
        <div class="row Card">
            <h2 class="animate__animated animate__flip text-center Card-Title py-2">All the reasons to start learning <br>how to type right now</h2>
        </div>
        <div class="row my-2 d-flex justify-content-evenly">
            <div class="col-md-3 text-center advantages">
                <img src="assets/img/stars.svg" alt="" height="100px" width="170px">
                <p>
                    <b> Scalaibility.</b> An engaging and interactive experience while you are learning how to type.
                </p>
            </div>
            <div class="col-md-3 text-center advantages">
                <img src="assets/img/hands.svg" alt="" height="100px" width="150px">
                <p>
                    <b>Proper hand posture guide.</b> Will show you the correct hand posture on every key as you type.
                </p>
            </div>
            <div class="col-md-3 text-center advantages">
                <img src="assets/img/badge.svg" alt="" height="100px" width="150px">
                <p>
                    <b>Levels, Badges and Stars.</b> All the reasons to keep you going, and build your muscle memory.
                </p>
            </div>
        </div>
        <div class="row mb-2 d-flex justify-content-evenly">
            <div class="col-md-3 text-center advantages">
                <img src="assets/img/accessibility.svg" alt="" height="100px" width="150px">
                <p>
                    <b>Accessibility.</b> TypingClub is the most accessible typing program available.
                </p>
            </div>
            <div class="col-md-3 text-center advantages">
                <img src="assets/img/experience.svg" alt="" height="100px" width="150px">
                <p>
                    <b>Interactive experience.</b> A full range of experiences from games, videos and different typing
                    challenges makes learning fun.
                </p>
            </div>
            <div class="col-md-3 text-center advantages">
                <img src="assets/img/voice-over.svg" alt="" height="100px" width="150px">
                <p>
                    <b> Voice over.</b> Once you turn it on, every word is read out loud as you are typing each word.
                </p>
            </div>
        </div>
    </div>
    <!-- End Motive -->
    <!-- Number Counter -->
    <div class="container-fluid" id="counter">
        <div class="row">
            <div class="col-4 pt-2 text-center">
                <div class="counter-item" data-target="1000">0</div>
                <h3><i class="fa-solid fa-face-smile"></i> Satisfied Learners</h3>
            </div>
            <div class="col-4 text-center">
                <div class="counter-item" data-target="890">0</div>
                <h3><i class="fa-solid fa-people-carry-box"></i> Reffered Clients</h3>
            </div>
            <div class="col-4 text-center">
                <div class="counter-item" data-target="720">0</div>
                <h3><i class="fa-solid fa-business-time"></i> Spending Time(HRS)</h3>
            </div>
        </div>
    </div>
    <!-- End Counter -->
    <!-- Tips And Techniques -->
    <div class="container-fluid motive">
        <div class="row my-2">
            <div class="col-md-6 text-center">
                <img src="assets/img/keyboard-demo.jpeg" alt="" height="100%" width="50%">
            </div>
            <div class="col-md-4 offset-lg-1 text-center">
                <h3 class="tips mt-3">Tips And Techniques</h3>
                <p>Tips which are used for to improve your typing skill and increase your typing skill
                    using Typing Expert.
                    <a href="tips-techniques.php" type="button"  class="btn btn-primary">Read More</a>
                </p>
            </div>
        </div>
    </div>
    <!-- End Tips And Techniques -->
    <!-- Footer -->
    <div class="container-fluid footer">
        <div class="row">
            <div class="col-md-5 d-flex justify-content-center pt-3 icons">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path
                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter"
                    viewBox="0 0 16 16">
                    <path
                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-instagram" viewBox="0 0 16 16">
                    <path
                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path
                        d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                </svg>
            </div>
            <div class="col-md-7 d-flex justify-content-center pt-2">
                <p>Copyright&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-c-circle" viewBox="0 0 16 16">
                        <path
                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.146 4.992c-1.212 0-1.927.92-1.927 2.502v1.06c0 1.571.703 2.462 1.927 2.462.979 0 1.641-.586 1.729-1.418h1.295v.093c-.1 1.448-1.354 2.467-3.03 2.467-2.091 0-3.269-1.336-3.269-3.603V7.482c0-2.261 1.201-3.638 3.27-3.638 1.681 0 2.935 1.054 3.029 2.572v.088H9.875c-.088-.879-.768-1.512-1.729-1.512" />
                    </svg>&nbsp;All Rights Reserved. Design & Developed By Sneha Rajput And Switty Hiwarkar</p>
            </div>
        </div>
    </div>
    <!-- End Footer-->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const counters = document.querySelectorAll('.counter-item');

        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            let count = 0;

            const updateCounter = () => {
                const increment = target / 200; // Change the value to control the speed of increment

                count += increment;

                if (count >= target) {
                    clearInterval(counterInterval);
                    count = target;
                }

                counter.textContent = Math.floor(count);
            };

            updateCounter();

            const counterInterval = setInterval(updateCounter, 50); // Change the interval as needed
        });
    });

</script>

</html>