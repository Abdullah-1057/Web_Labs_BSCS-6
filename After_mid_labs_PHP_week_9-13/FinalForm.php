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
}
else
    {
        header('Location: https://www.w3schools.com/');
        
    }
?>
  <h1>My Form</h1>
    <form method="post" action="SignInFinal.php">
        <div class="form-group">
          <label for="name">User Name:</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="text" class="form-control" id="pwd" name="pwd">
        </div>
       
        <button type="submit" class="btn btn-default">Sign Up</button>
      </form>


</body>
</html>

