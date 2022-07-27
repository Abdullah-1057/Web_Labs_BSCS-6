<?php
//Muhammad Abdullah BSCS-6 19-NTU-CS-1057 @ All rights reserved
if (isset($_GET['destroy'])) {
    setcookie('cart', '', 0);
    unset($_COOKIE['cart']);
}

require 'AbdullahDatabase.php';
$database = new Database();


$cart_string = "";
if (isset($_COOKIE['cart'])) {
    $cart_string = $_COOKIE['cart'];
}
$cart_items = explode(":", $cart_string);
$products = [];
foreach ($cart_items as $item) {
    $product = $database->FetchItemsByID($item);
    
    if ($product) {
        $products[] = $product;
    }
    //$products = $database->FetchItemsByID($item);
}
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
    <title>Check Out</title>
</head>
<body>
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

<br>

<h1>Your Cart</h1>
<?php

if (count($products) != 0) {
    ?>
    <ol>
        <?php
        foreach ($products as $product) {
            ?>
            <li><?php echo $product['pname'] ?></li>
            <?php
        }
        ?>
    </ol>
    <a href="checkout.php?destroy=true" style="padding:10px">
    <button type="button" class="btn btn-warning">Empty Cart</button>
    </a>

    <?php
} else {
    echo "Your Cart is Empty";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
</body>
</html>
