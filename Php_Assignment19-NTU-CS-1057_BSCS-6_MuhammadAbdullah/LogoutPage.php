<?php
//Muhammad Abdullah BSCS-6 19-NTU-CS-1057 @ All rights reserved
session_start();
session_destroy();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="icon" type="image/x-icon" href="National_Textile_University_Logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/StyleSheetMid.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="JS/custom.js" type="text/js"></script>
    <title>Log Out page</title>
</head>
<body>
    <hr>
<div class="section-title" data-aos="fade-up" style="  display: flex;justify-content: center;align-items: center;">
<hr>    
<h1>logged out</h1>  
    </div>
    <div style="  display: flex;justify-content: center;align-items: center; padding:20px">
    <a href="LoginPage.php" style="padding:10px">
    <button type="button" class="btn btn-primary">  Login  </button>
    </a>
    <a href="Home.php" style="padding:10px">
    <button type="button" class="btn btn-secondary">Main Store</button>
    </a>
    <a href="AddItems.php" style="padding:10px">
    <button type="button" class="btn btn-success">Add items</button>
    </a>
    </div>
<hr>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
</body>
</html>

