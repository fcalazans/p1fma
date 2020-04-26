<?php
$title = 'Login';
include 'includes/header.php';

// Main body
$login = makeForm("loginForm-body");
if (isset($_GET['error'])) {
    if ($_GET['error'] == 'notadmin') {
        echo '<span>Login as Administrator to access Admin area.</span></br></br>';
    }
}
echo $login;

// Footer
require 'includes/footer.php';