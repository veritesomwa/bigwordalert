<?php

session_start();
require "db.php";
if(isset($_SESSION['token'])){
    header('Location: ../');
}else{


    ?>

<?php ob_start();session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>bigwordalert: Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <div id="banner" style="display:none">
        <img class="banner" src="icons/icon.png" alt="bigwordalert" width="100" height="100">
    </div>
				<form action="" method="POST" class="login100-form validate-form" id="form-register">
					<span class="login100-form-title p-b-49">
						Sign Up
					</span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Firstname is required">
						<span class="label-input100">Firstname</span>
						<input class="input100" type="text" name="regfirstname" id="regfirstname" placeholder="Type your Firstname">
						<span class="focus-input100" data-symbol="&#xf207;"></span>
					</div>
                    <span style="color:red" class="error error-regfirstname"></span>
                    
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Lastname is required">
						<span class="label-input100">Lastname</span>
						<input class="input100" type="text" name="reglastname" id="reglastname" placeholder="Type your Lastname">
						<span class="focus-input100" data-symbol="&#xf207;"></span>
					</div>
                    <span style="color:red" class="error error-reglastname"></span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Email is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="regemail" id="regemail" placeholder="Type your Email">
						<span class="focus-input100" data-symbol="&#xf159;"></span>
					</div>
                    <span style="color:red" class="error error-regemail"></span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Phone number is required">
						<span class="label-input100">Phone Number</span>
						<input class="input100" type="text" name="regphone_number" id="regphone_number" placeholder="Enter Phone Number">
						<span class="focus-input100" data-symbol="&#xf2be;"></span>
					</div>
                    <span style="color:red" class="error error-regphone_number"></span>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="regpassword" id="regpassword" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf191;"></span>
					</div>
                    <br>
                    <span class="error error-regpassword"></span><br>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Confirm Password</span>
						<input class="input100" type="password" name="regpassword2" id="regpassword2" placeholder="Re-enter your password">
						<span class="focus-input100" data-symbol="&#xf191;"></span>
					</div>
                    <br>
                    <span class="error error-regpassword2"></span><br>
                    
                    <div id="error" style="color:#ee3333" class="error d-none"></div>
					
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Register
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

						<a href="../" class="txt2">
							Login instead
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
    <script src="js/script2.js"></script>

</body>
</html>

</html>
    <?php

}

?>