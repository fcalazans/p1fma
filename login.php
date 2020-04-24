<?php
$title = 'Login';
include 'includes/header.php';

// Main body
$login = makeForm("loginForm-body");
echo $login;

// Footer
require 'includes/footer.php';