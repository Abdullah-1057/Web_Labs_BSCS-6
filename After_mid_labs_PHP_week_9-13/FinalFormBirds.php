<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php
if(!isset($_SESSION['userid']))
{
    header('Location: http://localhost/PHP/FinalForm.php');
}
?>
<?php
if (!isset($_COOKIE['count'])) { 
    echo "Welcome! This is the first time you have viewed this page."; 
    $cookie = 1;
    setcookie("count", $cookie);
  }else{
    $cookie = ++$_COOKIE['count'];
    setcookie("count", $cookie); 
    echo "You have viewed this page ".$_COOKIE['count']." times."; 
    }
   /*
    if(isset($_POST['logout']))
{
    session_destroy();
    header("location:FinalForm.php");
}*/
    ?>
  <h1>My Form</h1>
    <form method="post" action="SignUpUser.php">
        <div class="form-group">
          <label for="bname">Bird Name:</label>
          <input type="text" class="form-control" id="bname" name="bname">
        </div>
        <div class="form-group">
          <label for="food">Food:</label>
          <input type="text" class="form-control" id="food" name="food">
        </div>
       
        <button type="submit" class="btn btn-default">Sign Up</button>
    <!--    <button type="submit" name="logout"class="btn btn-primary">Logout</button>-->
      <a href="SessionTerminator.php"> <button type="submit" class="btn btn-default">Logout</button></a>
      </form>


</body>
</html>

