<?php
$server =  "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($server,$username,$password);
if(!$con)
{
    die("connection to this DB failed".mysqli_connect_error());
}
//else
//{
  //  echo "sucess connecting to the db";
//}

$name=$_POST['Name'];
$age=$_POST['Age'];
$gender=$_POST['Gender'];
$email=$_POST['Email'];
$phone=$_POST['Phone'];
$description =$_POST['desc'];
$sql = "INSERT INTO `submitform`.`store` (`Sr #`, `Name`, `Age`, `Gender`, `Email`, `Phone`, `Description`, `Date`) VALUES (NULL, '$name', '$age', '$gender', '$email', '$phone', '$description', current_timestamp())";

if($con->query($sql2)==true)
{
    echo "yeasas";
}
else
{
    echo "noooooooooooo $con->error";
}

$con->close();

?>