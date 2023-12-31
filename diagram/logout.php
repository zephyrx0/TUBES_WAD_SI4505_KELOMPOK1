<?php
session_start();
session_destroy();
$_SESSION = [];
header('location: loginuser.php');
exit;

?>