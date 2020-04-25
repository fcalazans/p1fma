<?php
$title = 'Login';
include 'includes/header.php';
// var_dump($_SESSION);

// Main body
$login = makeForm("loginForm-body");
echo $login;

// Footer
require 'includes/footer.php';