 <?php
 //Muhammad Abdullah BSCS-6 19-NTU-CS-1057 @ All rights reserved
$USERNAME = 'abdullah';
$PASSWORD = '123';
session_start();

$logged_in = false;
if (isset($_POST['username']) && isset($_POST['password'])) 
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == $USERNAME && $password == $PASSWORD)
        $_SESSION['logged_in'] = true;
}

if (isset($_SESSION['logged_in']))
    $logged_in = (bool)$_SESSION['logged_in'];
?>
<!doctype html>
<html lang="en">
<head>
	<title>Login V16</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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

<title>Login Page</title>
</head>
<body>
<?php
if ($logged_in) {
    ?>
    <hr>
     <div class="section-title" data-aos="fade-up" style="  display: flex;justify-content: center;align-items: center;">
          <h2>logged in</h2>
    </div>
   <div style="  display: flex;justify-content: center;align-items: center; padding:20px">
    <a href="AddItems.php" style="padding:10px">
    <button type="button" class="btn btn-primary">Add items</button>
    </a>
    <a href="Home.php" style="padding:10px">
    <button type="button" class="btn btn-secondary">Main Store</button>
    </a>
    <a href="LogoutPage.php" style="padding:10px">
    <button type="button" class="btn btn-success">Log out</button>
    </a>
    </div>
<hr>

    <?php
} else {
    ?>
    
    <div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<form action="LoginPage.php" method="post" class="login100-form validate-form p-b-33 p-t-5">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input class="input100" type="text" name="username" id="username" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" id="password" placeholder="Password">
			
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	
    <?php
}
?>

	


	<div id="dropDownSelect1"></div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  	
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

</body>
</html>

