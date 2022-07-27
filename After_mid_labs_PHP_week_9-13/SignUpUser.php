<?php
session_start();
require_once('FinalDatabase.php');

$db = new Database();
$name = $_POST['bname'];
$food = $_POST['food'];
$enterby = $_SESSION['userid'];

$res=$db->signUp($name,$food,$enterby);

?>