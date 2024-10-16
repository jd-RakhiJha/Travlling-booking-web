<?php
include('../db.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Admin-Signup form</h2>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

            <div class="mb-3 mt-3">
                <label for="fname">FirstName</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter First name" name="fname">
            </div>
            <div class="mb-3 mt-3">
                <label for="lname">lastName</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter Last name " name="lname">
            </div>

            <div class="mb-3 mt-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd">Password</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

            <p class="register-link mb-0">Already have an account? <a href="login.php">Login here</a></p>


        </form>

</body>

</html>


<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    if(isset($_POST['submit'])){
        print_r($_POST);


    }
}
?>