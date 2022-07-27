
<?php
//Muhammad Abdullah BSCS-6 19-NTU-CS-1057 @ All rights reserved


$Store = ":";
//store
$string = "";
if (isset($_COOKIE['cart'])) {
    $string = $_COOKIE['cart'];
}

require 'AbdullahDatabase.php';
$database = new Database();

$cart_items = explode($Store, $string);
if (isset($_GET['toAdd']) && !in_array($_GET['toAdd'], $cart_items)) {
    $to_add = $_GET['toAdd'];
    $cart_items[] = $to_add;
    $string = implode($Store, $cart_items);
    setcookie('cart', $string, 0);
}

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Main Store</title>
    
</head>
<body>
<div data-aos="fade-up" style="  display: flex;justify-content: center;align-items: center;">
          <h1>Menu</h1>
          

    </div>
    <hr>
   <div style="  display: flex;justify-content: center;align-items: center; padding:20px">
    <a href="AddItems.php" style="padding:10px">
    <button type="button" class="btn btn-primary">Add items</button>
    </a>
    <a href="LoginPage.php" style="padding:10px">
    <button type="button" class="btn btn-secondary">Login   </button>
    </a>
    <?php
if ($string != "") {
    ?>
    <a href="checkout.php" style="padding:10px">
    <button type="button" class="btn btn-success">Checkout  </button>
    </a>
    <?php
}
?>    
    <a href="LogoutPage.php" style="padding:10px">
    <button type="button" class="btn btn-info">Log out  </button>
    </a>
    </div>
    <hr>
<h1>List of items in Store</h1>
<table class="table">
<thead class="thead-light"> 
    <tr>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Delete</th>
        <th>Add to cart</th>
    </tr>
    <?php
    $products = $database->FetchAllItems();
    foreach ($products as $product) {
        ?>            
        <tr>
            
            <td><?php echo $product['pname'] ?></td>
            <td><?php echo $product['pprice'] ?></td>
            <?php//  $store = $product['pid'] ?>
           <td> <a href="<?php echo 'DeleteItems.php?pid='.$product['pid']?>">Delete item</a></td>
            <?php
            $cart_items = explode($Store, $string);
            if (!in_array($product['pid'], $cart_items)) {
                ?>
                <td>
                
                <a href="<?php echo 'Home.php?toAdd=' . $product['pid'] ?>">Add to Cart</a>
                    
                </td>
               
                <?php
            }
            ?>
        </tr>
        <?php
    }
    ?>
</thead>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
</body>
</html>

