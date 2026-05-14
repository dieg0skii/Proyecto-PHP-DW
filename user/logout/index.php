<?php

session_start();

//chao sesión
$_SESSION = array();
session_destroy();

count($_SESSION);
if (count($_SESSION) == 0) {
header("Location: ../../");
exit();
}
?>