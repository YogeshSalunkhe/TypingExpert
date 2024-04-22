<!DOCTYPE html>
<html lang="en">

<?php include 'header.php' ?>

<body>
    <!-- Registration Form-->
    <div class="container-fluid" style="background-color:#DCF2F1;">
        <div class="row py-4">
            <div class="col-md-6 offset-md-3 py-4">
                <form class="py-2" method="post" action="feedback-process.php">
                    <h3 class="text-center loginlbl">Feedback Form</h3>
                    <div class="mb-3 mx-5"><br>
                        <label for="exampleInputName" class="form-label">1] How satisfied were you with your experience
                            using our typing test website?</label><br>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" value="Verygood">
                        <label class="form-check-label me-2" for="Verygood">
                            Very Satisfied
                        </label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" value="Good">
                        <label class="form-check-label me-2" for="Good">
                            Good
                        </label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" value="Verybad">
                        <label class="form-check-label me-2" for="Verybad">
                            Very Dissatisfied
                        </label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" value="notbetter">
                        <label class="form-check-label me-2" for="notbetter">
                            Bad
                        </label>
                    </div>
                    <div class="mb-3 mx-5">
                        <label for="exampleFormControlTextarea1" class="form-label">2] What did you like most about our
                            typing test website?</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="liked_most" rows="3"></textarea>
                    </div>
                    <div class="mb-3 mx-5">
                        <label for="Improvement" class="form-label">3] What aspects of our typing test website
                            could be improved?</label>
                        <textarea class="form-control" id="Improvement" rows="3"  name="improvement"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-6 me-auto text-center">
                            <button type="submit" class="btn btn-warning my-2 px-3">Send Feedback</button>
                        </div>
                        <div class="col-6 mt-2 text-center">
                            <a  class="btn btn-danger px-3">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- End Form-->
    <?php include 'footer.php' ?>
</body>

</html>