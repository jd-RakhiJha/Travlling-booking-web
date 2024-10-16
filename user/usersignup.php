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
        <h2>User-Signup form</h2>
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
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
            <div class="mb-3">
            <label for="role">Select Role:</label>
            <select name="role" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select><br><br>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>

            <p class="register-link mb-0">Already have an account? <a href="userlogin.php">Login here</a></p>


        </form>

</body>

</html>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['submit'])) {
        # print_r($_POST);

        $firstname = $_POST["fname"];
        $lastname = $_POST["lname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $role = $_POST["role"];


        if (empty($_POST["fname"])) {
            echo "firstname field is required";
        } else {
            $firstname = $_POST["fname"];
        }


        if (empty($_POST["lname"])) {
            echo "lname field is required";
        } else {
            $lastname = $_POST["lname"];
        }

        if (empty($_POST["email"])) {
            echo "email field is required";
        } else {
            $email = $_POST["email"];
        }


        if (empty($_POST["password"])) {
            echo "password field is required";
        } else {
            $password = $_POST["password"];
        }

        if (empty($_POST["role"])) {
            echo "role field is required";
        } else {
            $role = $_POST["role"];
        }

        $insert_queery = "INSERT INTO users(fname, lname, email, password, role) VALUES('$firstname', '$lastname', '$email', '$password', '$role')";

        if (mysqli_query($mysqli, $insert_queery)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
        }
    }
}
?>