<?php

session_start();
require "db.php";
if(isset($_SESSION['token'])){
    header('Location: ../');
}else{


    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bigwordalert</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/material.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    
</head>
<body>

<style>
    .password-container {
    position: relative;
    width: 100%;
    margin: 0 auto;
}

.password-field {
    width: 100%;
    padding: 10px;
    padding-right: 60px; /* to make space for the toggle */
    font-size: 16px;
}

.toggle-password {
    position: absolute;
    top: 60%;
    right: 10px;
    transform: translateY(-50%);
    cursor: pointer;
    user-select: none;
    color: #007BFF;
    font-size: 16px;
}
</style>

    <div id="banner" style="display:none">
        <img class="banner" src="icons/icon.png" alt="bigwordalert" width="100" height="100">
    </div>
    
    <form id="form-register" class="form-login" action="" method="POST">
        <h1>Register</h1>
        <div>
            <label for="regfirstname">First Name</label>
            <input type="text" name="regfirstname" id="regfirstname">
            <span style="color:red" class="error error-regfirstname"></span>
        </div>
        <div>
            <label for="reglastname">Last Name</label>
            <input type="text" name="reglastname" id="reglastname">
            <span style="color:red" class="error error-reglastname"></span>
        </div>
        <div>
            <label for="regemail">Email</label>
            <input type="text" name="regemail" id="regemail">
            <span style="color:red" class="error error-regemail"></span>
        </div>
        <div>
            <label for="regphone_number">Phone Number</label>
            <input type="text" name="regphone_number" id="regphone_number">
            <span style="color:red" class="error error-regphone_number"></span>
        </div>
        <div class="password-container">
            <label for="regpassword">Password</label>
            <input type="password" id="regpassword" name="regpassword" class="password-field" placeholder="Enter your password"><span id="togglePassword" class="toggle-password">Show</span>
        </div>
        <span class="error error-regpassword"></span><br>
        <div class="password-container">
            <label for="regpassword2">Confirm Password</label>
            <input type="password" id="regpassword2" name="regpassword2" class="password-field" placeholder="Enter your password"><span id="togglePassword" class="toggle-password">Show</span>
        </div>
        <span class="error error-regpassword2"></span><br>
        <br>
        <button type="submit" class="btn ripple btn-danger" name="submit" id="submit">Login</button>
        <a class="link" href="../">Already have an account</a>
        <!-- <button class="btn ripple"></button> -->

        <br><br><div id="reg_error" class="error d-none"></div>

        
    </form>
    <script src="js/script2.js"></script>
</body>
</html>
    <?php

}

?>