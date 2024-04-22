<!DOCTYPE html>
<html lang="en">

<?php include 'header.php' ?>

    <!-- Registration Form-->
    <div class="container-fluid loginform">
        <div class="row py-4">
            <div class="col-md-6 offset-md-3 py-4">
                <form class="py-2" method="post" action="data.php">
                    <h3 class="text-center">Registration/Sign up</h3>
                    <div class="mb-3 mx-5">
                        <label for="exampleInputName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="exampleInputName" name="fullname">
                    </div>
                    <div class="mb-3 mx-5">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3 mx-5">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="row">
                        <div class="col-6 me-auto text-center">
                            <button type="submit" class="btn btn-warning my-2 px-3">Sign Up</button>
                        </div>
                        <div class="col-6 mt-2 text-center">
                            <a href="login.php" class="btn btn-primary px-3"> Login</a>
                        </div>
                    </div>
                </form>
                
            </div> 
        </div>
    </div>

    <!-- End Form-->
<?php include 'footer.php' ?>

</html>