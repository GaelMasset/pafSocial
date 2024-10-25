<?php
session_start();

$_SESSION = [];

session_destroy();

header('Location: /pafSocial/index.php'); 
exit();
?>
