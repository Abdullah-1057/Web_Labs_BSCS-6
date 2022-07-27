<?php
require_once('Database.php');
$db = new Database();
$user = $_POST['csemail'];
$pwd = md5($_POST['cspwd']);

$db->signUp($user,$pwd);