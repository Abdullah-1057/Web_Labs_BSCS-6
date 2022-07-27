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
    if(isset($_GET['e']))
    {
        if($_GET['e']==23000)
        {
            print('<div class="alert alert-warning">
            <strong>Warning!</strong> Sign up name already exsists
          </div>
          ');
        }
        else
        {
            print('<div class="alert alert-warning">
            <strong>Failure!</strong> Something went wrong
          </div>
          ');
        }
    }
    ?>
    <h1>My Form</h1>
    <form method="post" action="SignUp.php">
        <div class="form-group">
          <label for="email">Email address:</label>
          <input type="text" class="form-control" id="email" name="csemail">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="text" class="form-control" id="pwd" name="cspwd">
        </div>
       
        <button type="submit" class="btn btn-default">Sign Up</button>
      </form>
</body>
</html>

