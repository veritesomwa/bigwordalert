<?php ob_start();session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>bigwordalert: Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="includes/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="includes/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="includes/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="includes/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="includes/vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="includes/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="includes/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="includes/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="includes/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="includes/css/util.css">
	<link rel="stylesheet" type="text/css" href="includes/css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('includes/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <div id="banner" style="display:none">
				<img class="banner" src="includes/icons/icon.png" alt="bigwordalert" width="100" height="100">
			</div>
				<form action="" method="POST" class="login100-form validate-form" id="form-login">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Email is reauired">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="username_email" id="username_email" placeholder="Type your Email">
						<span class="focus-input100" data-symbol="&#xf159;"></span>
					</div>
                    <span style="color:red" class="error error-username_email"></span>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" id="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
                    <br>
                    <span class="error error-password"></span><br>
                    
                    <div id="error" style="color:#ee3333" class="error d-none"></div>
					
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

					<div class="flex-col-c p-t-10">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="includes/register.php" class="txt2">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script src="includes/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="includes/vendor/animsition/js/animsition.min.js"></script>
	<script src="includes/vendor/bootstrap/js/popper.js"></script>
	<script src="includes/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="includes/vendor/select2/select2.min.js"></script>
	<script src="includes/vendor/daterangepicker/moment.min.js"></script>
	<script src="includes/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="includes/vendor/countdowntime/countdowntime.js"></script>
	<script src="includes/js/main.js"></script>
    <script src="includes/js/script2.js"></script>

</body>
</html>