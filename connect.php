<?php
$server="localhost";
$username="root";
$password="";
$dbname="users";

$con = new mysqli($server, $username, $password, $dbname);

if($con->connect_error){
    die("Connection failed: " . $con->connect_error);
} 
echo "Connect Success.";

if(isset($_POST["reg_submit"])){

    $firstname = $con->real_escape_string($_POST["firstname"]);
    $lastname  = $con->real_escape_string($_POST["lastname"]);
    $fullname = $firstname . " " . $lastname;

    $email = $con->real_escape_string($_POST["email"]);
    $phone = $con->real_escape_string($_POST["phone"]);
    $password = $con->real_escape_string($_POST["password"]);
    $re_password = $con->real_escape_string($_POST["re_password"]);
    $address = $con->real_escape_string($_POST["address"]);
    $city = $con->real_escape_string($_POST["city"]);
    $post = $con->real_escape_string($_POST["post"]);
    $country = $con->real_escape_string($_POST["country"]);
    $region = $con->real_escape_string($_POST["region"]);

    // Password match check
    if($password !== $re_password){
        echo "Password does not match!";
        exit();
    }

    // Check if email already exists
    $checkmail = "SELECT * FROM user_info WHERE email='$email'";
    $result = $con->query($checkmail);

    if($result->num_rows > 0){
        echo "Email already has an account";
    } 
    else {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO user_info 
        (fullname, email, password, address, city, post, country, region, phone) 
        VALUES 
        ('$fullname', '$email', '$hashed_password', '$address', '$city', '$post', '$country', '$region', '$phone')";

        if($con->query($sql) === TRUE){
            echo "Insert successfully";
        } else {
            echo "Fail to insert: " . $con->error;
        }
    }
}


// $server="localhost";
// $username="root";
// $password="";
// $dbname="users";

// $con= new mysqli($server, $username, $password,$dbname);
// if(!$con)
// {
//     echo "fail to connect";
// }
// else{
//     echo "connect Success.";
//     if(isset($_POST["reg-submit"])){
//         $firstname = $_POST["firstname"];
//         $lastname  =  $_POST["lastname"];
//         $fullname = $firstname . " " . $lastname;
//         $email = $_POST["email"];
//         $phone =  $_POST["phone"];
//         $password =$_POST["password"];
//         $re_password =  $_POST["re-password"];
//         $address =  $_POST["address"];
//         $city = $_POST["city"];
//         $post =  $_POST["post"];
//         $country = $_POST["country"];
//         $region = $_POST["region"];

//         // Password match check
//         if($password !== $re_password){
//             echo "Password does not match!";
//             exit();
//         }

//         // Check if email already exists
//         $checkmail = "SELECT * FROM reg_log WHERE email='$email'";
//         $result = $con->query($checkmail);

//         if($result->num_rows > 0){
//             echo "Email already has an account";
//         } 
//         else {

//             $hashed_password = password_hash($password, PASSWORD_BCRYPT);
//             $sql = "insert into user_info values($fullname, $email, $hashed_password, $address, $city, $post, $country, $region, $phone)";
//             if($con->query($sql)==true){
//             echo "insert successfully";
//             }
//             else{
//                 echo "fail to insert";
//             }
//         }
//     }
// }
// if(!$con)
// {
//     echo "fail to connect";
// }
// else{
//     echo "Connect Success";
// if(isset($_POST["reg-submit"])){

//     $firstname = $_POST["firstname"];
//     $lastname  =  $_POST["lastname"];
//     $fullname = $firstname . " " . $lastname;
//     $email = $_POST["email"];
//     $phone =  $_POST["phone"];
//     $password =$_POST["password"];
//     $re_password =  $_POST["re-password"];
//     $address =  $_POST["address"];
//     $city = $_POST["city"];
//     $post =  $_POST["post"];
//     $country = $_POST["country"];
//     $region = $_POST["region"];

//     // Password match check
//     if($password !== $re_password){
//         echo "Password does not match!";
//         exit();
//     }

//     // Check if email already exists
//     $checkmail = "SELECT * FROM reg_log WHERE email='$email'";
//     $result = $con->query($checkmail);

//     if($result->num_rows > 0){
//         echo "Email already has an account";
//     } 
//     else {

//         $hashed_password = password_hash($password, PASSWORD_BCRYPT);

//         $sql = "INSERT INTO reg_log(fullname, email, phone, password, address, city, post, country, region)
//                 VALUES('$fullname', '$email', '$phone', '$hashed_password', '$address', '$city', '$post', '$country', '$region')";

//         if($con->query($sql) === TRUE){
//             echo "Account Created!!!";
//         } else {
//             echo "Error: " . $con->error;
//         }
//     }
// }
// }
?>