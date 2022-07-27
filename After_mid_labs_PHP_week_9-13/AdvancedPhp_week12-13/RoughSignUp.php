<?php
 require_once('roughDatabase.php');
 $db = new Database();
 $email = $_POST['email'];
 $pwd = md5($_POST['pwd']);
 
 $db->signUp($email);



 ?>