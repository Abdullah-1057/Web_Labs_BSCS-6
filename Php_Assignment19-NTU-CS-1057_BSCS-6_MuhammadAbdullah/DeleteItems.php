<?php
//Muhammad Abdullah BSCS-6 19-NTU-CS-1057 @ All rights reserved
require 'AbdullahDatabase.php';
$database = new Database();
$id = $_GET['pid'];
$database->DeleteStoreItems($id);
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
    <title>Delete Items</title>
</head>
<body>
    <hr>
<h1>Item Deleted</h1>
<hr>
</div>
   <div style="  display: flex;justify-content: center;align-items: center; padding:20px">
    <a href="AddItems.php" style="padding:10px">
    <button type="button" class="btn btn-primary">Add items</button>
    </a>
   
    
    <a href="Home.php" style="padding:10px">
    <button type="button" class="btn btn-success">Main Store</button>
    </a>
      
    <a href="LogoutPage.php" style="padding:10px">
    <button type="button" class="btn btn-info">Log out</button>
    </a>
    </div>

    
<body>
</html>