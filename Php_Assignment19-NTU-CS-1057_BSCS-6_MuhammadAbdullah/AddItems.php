
<?php
//Muhammad Abdullah BSCS-6 19-NTU-CS-1057 @ All rights reserved 
session_start();

//if login then add


if (isset($_SESSION['logged_in']))
    $logged_in = $_SESSION['logged_in'];

else
    $logged_in = false;
require 'AbdullahDatabase.php';
$database = new Database();

?>
<!doctype html>
<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Bootstrap CSS -->
     <link rel="icon" type="image/x-icon" href="National_Textile_University_Logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/StyleSheetMid.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="JS/custom.js" type="text/js"></script>
    <head>
	<title>Login Page</title>
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
    <title>Add Items</title>
</head>
<body>
<?php
if ($logged_in) {
    if (isset($_POST['pname']) && isset($_POST['pprice'])) {
        $ProductName = $_POST['pname'];
        $ProductPrice = $_POST['pprice'];
        $database->AddItem($ProductName, $ProductPrice);
        ?>
        <hr>
         <div style="  display: flex;justify-content: center;align-items: center; padding:20px">
     <a href="AddItems.php" style="padding:10px;">
    <button type="button" class="btn btn-primary">Add more items</button>
    </a>
    <a href="Home.php" style="padding:10px;">
    <button type="button" class="btn btn-secondary">Main Store</button>
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
					Add Items
				</span>
				<form action="AddItems.php" method="post" class="login100-form validate-form p-b-33 p-t-5">

					<div class="wrap-input100 validate-input" data-validate = "Enter Product Name">
                    <input class="input100" type="text" placeholder="Product Name" name="pname" id="pname">
                       
						<span class="focus-input100" data-placeholder="<|>"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter Price">
                    <input class="input100" placeholder="Price" type="text" name="pprice" id="pprice">
                
                    <span class="focus-input100" data-placeholder="$"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Submit
						</button>
					</div>
                
            
            
				</form>
			</div>
		</div>
	</div>
	
    <?php
    }
    ?>
  <?php  

}
else {
    ?>
<hr>
    <div data-aos="fade-up" style="  display: flex;justify-content: center;align-items: center;">
          <h1>Your are not logged IN</h1>
          
    </div>
   <div style="  display: flex;justify-content: center;align-items: center; padding:20px">
    <a href="LoginPage.php" style="padding:10px">
    <button type="button" class="btn btn-success">Login</button>
    </a>
    </div>
    <hr>
    <?php
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
</body>
</html>

