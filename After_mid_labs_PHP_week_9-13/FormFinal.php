<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 class="MyForm">My Form</h1>
<p class = "Sucess"> Thankyou for submitting this form</p>
<form action="Final_Index.php" method = "POST">
  <label for="Name">Name:</label><br>
  <input type="text" id="Name" name="Name" placeholder ="John"><br>
  <label for="Age">Age:</label><br>
  <input type="number" id="Age" name="Age" placeholder="18"><br><br>
  <label for="Gender">Gender:</label><br>
  <input type="text" id="Gender" name="Gender" placeholder ="Gender"><br>
  <label for="Email">Email:</label><br>
  <input type="email" id="Email" name="Email" placeholder ="Email"><br>
  <label for="Phone">Phone:</label><br>
  <input type="phone" id="Phone" name="Phone" placeholder ="Phone"><br>
  <label for="desc">Description:</label><br>
  <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
<button class ="btn" >submit</button>
<button class = "reset">reset</button>
  


</form> 
</body>
</html>
