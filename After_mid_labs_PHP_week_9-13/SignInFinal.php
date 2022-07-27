<?php
session_start();
 require_once('FinalDatabase.php');
$user = $_POST['name'];
$pwd = $_POST['pwd'];
$db = new Database();

$res = $db->CheckSignIn($user,$pwd);

if($res === false){
    echo('SignIn Failed');
}
else{
    
    header('Location: https://www.w3schools.com/');
}