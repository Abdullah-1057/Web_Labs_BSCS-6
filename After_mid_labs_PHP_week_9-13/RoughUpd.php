<?php
 require_once('roughDatabase.php');
 $db = new Database();
 $email = $_POST['email'];
 $id = $_POST['pwd'];
 
 //$db->Update($email,$id);
 $db->Delete();


 ?>