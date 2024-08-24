<?php
require 'db.php';

ob_start();
session_start();

$email = $_POST['regemail'];
$firstname = ucfirst($_POST['regfirstname']);
$lastname = ucfirst($_POST['reglastname']);
$phone_number = $_POST['regphone_number'];
$password = md5($_POST['regpassword']);



$checkuseravailabilty = "SELECT * FROM users WHERE user_email = '$email'";

$result = mysqli_query($conn, $checkuseravailabilty);
if(mysqli_num_rows($result) !== 0){
    echo json_encode(['error' => 'Email already exists']);
}else{
    
    $sql = "INSERT INTO `users`(`user_id`, `user_firstname`, `user_lastname`, `user_email`, `user_username`, `user_number`, `user_password`) VALUES (NULL,'".$firstname."','".$lastname."','".$email."','','".$phone_number."','".$password."')";

    $myresult = mysqli_query($conn, $sql);
    
    $query = "SELECT * FROM users WHERE user_email = '$email' AND user_password = '$password'";

    $query_run = mysqli_query($conn, $query);
    if(mysqli_num_rows($query_run) === 0){
        echo json_encode(['error' => 'Invalid user credentials']);
    }else{
    
        $rows = mysqli_fetch_array($query_run);
    
        $_SESSION['token'] = password_hash(session_id(), PASSWORD_DEFAULT);
        echo json_encode(['token' => "${_SESSION['token']}"]);
    
        $_SESSION['user_username'] = $rows["user_username"];
        $_SESSION['user_number'] = $rows["user_number"];
        $_SESSION['user_email'] = $rows["user_email"];
        $_SESSION['user_firstname'] = $rows["user_firstname"];
        $_SESSION['user_lastname'] = $rows["user_lastname"];
        $_SESSION['user_id'] = $rows["user_id"];
    
        // header("Location: index.php");
    }
}

?>