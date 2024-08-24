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
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="includes/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="includes/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="includes/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="includes/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="includes/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="includes/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="includes/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="includes/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="includes/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="includes/css/util.css">
	<link rel="stylesheet" type="text/css" href="includes/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('includes/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <div id="banner" style="display:none">
        <img class="banner" src="includes/icons/icon.png" alt="bigwordalert" width="100" height="100">
    </div>
				<form class="login100-form validate-form" id="form-login">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username/Email</span>
						<input class="input100" type="text" name="username_email" id="username_email" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="#" class="txt2">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="includes/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="includes/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="includes/vendor/bootstrap/js/popper.js"></script>
	<script src="includes/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="includes/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="includes/vendor/daterangepicker/moment.min.js"></script>
	<script src="includes/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="includes/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="includes/js/main.js"></script>
    <script src="includes/js/script2.js"></script>

</body>
</html>