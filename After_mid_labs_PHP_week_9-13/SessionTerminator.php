<?php
session_start();
session_unset();
session_destroy();
echo "log out";
header('Location: http://localhost/PHP/FinalForm.php');
?>