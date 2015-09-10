<?php
session_start();

/**
 * Created by PhpStorm.
 * User: hdiakite
 * Date: 2015-09-08
 * Time: 18:53
 */


setcookie("username", $username_input, time()-3600);
setcookie("password", $password_input, time()-3600);

// remove all session variables
session_unset();

// destroy the session
session_destroy();

header('location: login.php');
exit;