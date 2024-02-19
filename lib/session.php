<?php

session_set_cookie_params([
    'lifetime' => 86400,
    'path' => '/',
    'domain' => _DOMAIN_,
    'httponly' => true
]);

session_start();

function adminOnly()
{
    if (!isset($_SESSION['user'])) {
        header('location: ../login.php');
    } else if ($_SESSION['user']['role'] != 'admin') {
        header('location: ../index.php');
    }
}
