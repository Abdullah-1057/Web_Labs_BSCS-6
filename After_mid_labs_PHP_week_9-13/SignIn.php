<?php
 require_once('Database.php');
$user = $_POST['csename'];
$pwd = md5($_POST['cspwd']);
$db = new Database();

$res = $db->CheckSignIn($user,$pwd);

if($res === false){
    echo('SignIn Failed');
}
else{
    header('Location: https://www.w3schools.com/');
}