<?php 
$server="localhost";
$username="root";
$password="";
$dbname="project";

$con= new mysqli($server, $username, $password, $dbname);
if(!$con)
{
    echo "fail to connect";
}
else{
 include "connect.php";

if(isset($_POST["reg-submit"])){

    $firstname = mysqli_real_escape_string($con, $_POST["firstname"]);
    $lastname  = mysqli_real_escape_string($con, $_POST["lastname"]);
    $fullname = $firstname . " " . $lastname;

    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $phone = mysqli_real_escape_string($con, $_POST["phone"]);
    $password = mysqli_real_escape_string($con, $_POST["password"]);
    $re_password = mysqli_real_escape_string($con, $_POST["re-password"]);
    $address = mysqli_real_escape_string($con, $_POST["address"]);
    $city = mysqli_real_escape_string($con, $_POST["city"]);
    $post = mysqli_real_escape_string($con, $_POST["post"]);
    $country = mysqli_real_escape_string($con, $_POST["country"]);
    $region = mysqli_real_escape_string($con, $_POST["region"]);

    // Password match check
    if($password !== $re_password){
        echo "Password does not match!";
        exit();
    }

    // Check if email already exists
    $checkmail = "SELECT * FROM reg_log WHERE email='$email'";
    $result = $con->query($checkmail);

    if($result->num_rows > 0){
        echo "Email already has an account";
    } 
    else {

        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO reg_log(fullname, email, phone, password, address, city, post, country, region)
                VALUES('$fullname', '$email', '$phone', '$hashed_password', '$address', '$city', '$post', '$country', '$region')";

        if($con->query($sql) === TRUE){
            echo "Account Created!!!";
        } else {
            echo "Error: " . $con->error;
        }
    }
}
}
?>