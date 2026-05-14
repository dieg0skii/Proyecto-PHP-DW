<?php

session_start();
if (isset($_SESSION['user_id'])) {
    //si el usuario ya esta logueado...
    header("Location: dashboard/");
    exit();
} else {
    //si no esta logueado...
    header("Location: user/login/");
    exit();
}
?>