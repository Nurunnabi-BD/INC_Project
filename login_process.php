<?php
session_start();

$server = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$con = new mysqli($server, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if (isset($_POST['login_submit'])) {

    $email = $con->real_escape_string($_POST['email']);
    $password = $con->real_escape_string($_POST['password']);

    $sql = "SELECT * FROM user_info WHERE email='$email'";
    $result = $con->query($sql);

    if ($result->num_rows == 1) {

        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {

            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['fullname'];

            $_SESSION['login_success'] = "Login successful! Welcome ".$row['fullname'];

            header("Location: login.php");
            exit();

        } else {

            $_SESSION['login_error'] = "Incorrect password!";
            header("Location: login.php");
            exit();
        }

    } else {
        $_SESSION['login_error'] = "Email not registered!";
        header("Location: login.php");
        exit();
    }
}
?>
