<?php include 'header.php' ?>
<!-- Login form -->
    <div class="container-fluid loginform">
        <div class="row pt-5">
            <div class="col-md-6 offset-lg-3">
                <div class="row">
                    <div class="col-md-6 offset-lg-3">
                        <form method="post" action="check-login.php">
                            <h3 class="text-center pt-2 loginlbl">LOGIN FORM</h3>
                            <div class="my-3 d-flex justify-content-center">
                                <img src="assets/img/login-img.png" alt="login icon" height="100rem;">
                            </div>
                            <div class="mx-5 my-2 frmcntrl">
                                <label for="exampleInputUname1" class="form-label">Enter Username : </label>
                                <input type="text" class="form-control" id="exampleInputUname1" name="username" aria-describedby="emailHelp">
                            </div>
                            <div class="mx-5 my-2 frmcntrl">
                                <label for="exampleInputPassword1" class="form-label">Enter Password : </label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                            </div>
                            <div class="row">
                                <div class="col-6 me-auto text-center">
                                    <button type="submit" class="btn btn-warning my-2">Login</button>
                                </div>
                                <div class="col-6 mt-2 text-center">
                                    <a href="registration.php" class="btn btn-primary">Sign Up</a>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login-->
 <?php include 'footer.php' ?>


</html>