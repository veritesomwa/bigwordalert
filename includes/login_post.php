<?php
require 'db.php';

ob_start();
session_start();

$username_email = $_POST['username_email'];
$password = md5($_POST['password']);

$query = "SELECT * FROM users WHERE (user_email = '$username_email' OR user_username = '$username_email') AND user_password = '$password'";

$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) === 0){
    echo json_encode(['error' => 'Invalid user credentials']);
}else{

    $rows = mysqli_fetch_array($result);

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

?>