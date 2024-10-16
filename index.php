<?php
include('db.php');
session_status();
?>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];


    $email = mysqli_real_escape_string($mysqli, $email);

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($mysqli, $sql);

    if (mysqli_num_rows($result) > 0) {
        $email = mysqli_fetch_assoc($result);

        if (($password == $email['password'])) {
            $_SESSION["email"] = $email['fname'];
            echo $_SESSION["email"];
            echo "Login successful. Welcome, ";
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that email.";
    }
} else {
    # echo "Form not submitted.";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header & Footer</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js">
    </script>

</head>

<body>


    <nav class="topnav">
        <a class="active" href="">Home</a>
        <a href="">Destination</a>
        <a href="">Travel</a>
        <a href="">Calender</a>
        <a href="">contact</a>
        <button class="open-button" onclick="openForm()"><?php
                                                            if (isset($_SESSION["email"])) {
                                                                echo $_SESSION["email"];
                                                            } else {
                                                                echo "Login";
                                                            }
                                                            ?>
         
         

        </button>


    </nav>

    <div class="form-popup" id="myForm">
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="form-container">
            <h1>Login</h1>

            <label for="text"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit" class="btn" name="submit">Login</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
    </div>

</body>

</html>