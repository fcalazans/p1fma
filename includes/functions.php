<?php

// Function that generate a form according to the parameter passed.
function makeForm($form) {
    if (isset($_SESSION['firstname'])) {
        $name = $_SESSION['firstname'];
    } else {
        $name = '';
    }
    $errorUser = $errorPass = '';
    $spanStatus = '<span class= "login-status" id="header-login-status" >Hi ' . $name . ', you are logged in!</span>';
    $class = 'loginForm-header'; // Change the class on CSS.

    if ($form === 'loginForm-body') {
        $class = 'loginForm-body';
        $spanStatus = '<span class= "login-status" id="header-login-status" ></span>';
    }

    // $self = htmlentities($_SERVER['PHP_SELF']);
    if (isset($_GET['error'])) {
        if ($_GET['error'] == 'nouser' && $class == 'loginForm-body') {
            $errorUser = '<span>User not found</span>';
        } elseif ($_GET['error'] == 'emptyfields' && $class == 'loginForm-body') {
            $errorUser = '<span>All fields are required</span>';
            $errorPass = '<span>All fields are required</span>';
        }
    }

    // Form template in header.

    if (isset($_SESSION['username'])) {
        // $self = htmlentities($_SERVER['PHP_SELF']);

        $loginForm = $spanStatus . '
        <div class="' . $class . '">
        <form action="includes/header.php" method="post">
            <button type="submit" name="logout-submit" class="admin-btn">Logout</button>
        </form>
        </div>';
    } else {
        $loginForm = '
        <div class="' . $class . '">

        <form action="includes/login.inc.php" method="post">
            <label for="user-login">Username</label>
            <input type="text" name="uname" id="user-login" placeholder="Username" autocomplete="username">' . $errorUser . '

            <label for="pwd-login">Password</label>
            <input type="password" name="pass" id="pwd-login" placeholder="Password" autocomplete="current-password">' . $errorPass . '

            <button type="submit" name="login-submit" class="admin-btn">Login</button>
        </form>
        </div>';
    }

    if ($form === 'loginForm-body') {
        $spanStatus = '<span class= "login-status" id="header-login-status" ></span>';
        return $loginForm;
    } elseif ($form === 'loginForm-header') {
        return $loginForm;
    } else {
        return $form;
    }

};

// Function that take a 2 parameters and return H tag. citation(Ian Hollender)
function makeHeading($str, $num) {
    echo "<h" . $num . ">" . $str . "</h" . $num . ">";
};

// Function that takes 1 parameter and display the body of the intranet page.
function displayBody($data) {

    $handle = fopen($data, 'r') or die('Failed to open the file');

    while (!feof($handle)) { // While is not the end of the file.
        $name = fgets($handle); // Get the content of the page until EOL.
        echo $name;
    }
    fclose($handle);
};