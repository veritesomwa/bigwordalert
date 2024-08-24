<?php ob_start();session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bigwordalert</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="includes/css/material.css">
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
        <img class="banner" src="includes/icons/icon.png" alt="bigwordalert" width="100" height="100">
    </div>
    
    <form id="form-login" class="form-login" action="" method="POST">
        <h1>Login</h1>
        <div>
            <label for="username_email">Username / Email</label>
            <input type="text" name="username_email" id="username_email">
            <span style="color:red" class="error error-username_email"></span>
        </div>
        <div class="password-container">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="password-field" placeholder="Enter your password"><span id="togglePassword" class="toggle-password">Show</span>
        </div>
        <span class="error error-password"></span><br>
        <br>
        <button type="submit" class="btn ripple btn-danger" name="submit" id="submit">Login</button>
        <a class="link" href="includes/register.php">Create An Account</a>
        <!-- <button class="btn ripple"></button> -->

        <br><br><div id="error" class="error d-none"></div>

        
    </form>
    <script src="includes/js/script2.js"></script>
</body>
</html>

