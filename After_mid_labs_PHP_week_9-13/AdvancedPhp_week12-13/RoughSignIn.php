<?php
 require_once('Database.php');
 $db = new Database();
 $email = $_POST['email'];
$id = $_POST['pwd'];
$res = $db->CheckSignIn($id,$email);

if($res === false){
    echo('SignIn Failed');
}
else{
    header('Location: https://www.w3schools.com/');
}
?>