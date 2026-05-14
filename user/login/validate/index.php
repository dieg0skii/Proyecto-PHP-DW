<?php
session_start();
if (isset($_SESSION['user_id'])) {
    //si el usuario ya esta logueado...
    header("Location: ../../../dashboard/");
    exit();
} else {
    //si no esta logueado...
    $formUsername = $_POST['username'];
    $formPassword = $_POST['password'];

    $user = 'diegoski@helloworld.cl';
    $pass = 'TheCars1984';

    if ($user == $formUsername && $pass == $formPassword) {
        $_SESSION['user_id'] = 1;
        $_SESSION['user_name'] = 'balatro balatrez';
        header("Location: ../../../dashboard/");
        exit();
    } else {
        echo 'usuario y contraseña equivocado';
    }
}
