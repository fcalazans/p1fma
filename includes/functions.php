<?php

// Function that generate a form according to the parameter passed.
function makeForm($form) {
    $errorUser = '';
    $errorPass = '';
    $class = 'loginForm-header'; // Change the class on CSS.

    if ($form === 'loginForm-body') {
        $class = 'loginForm-body';
    }
    if (isset($_SESSION['firstname'])) {
        $name = $_SESSION['firstname'];
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

    // Login template for form-body

    if (isset($_SESSION['username'])) {
        $self = htmlentities($_SERVER['PHP_SELF']);
        $loginForm = '
        <span class= "login-status" id="header-login-status" >Hi ' . $name . ', you are logged in!</span>
        <div class="' . $class . '">
        <form action="' . $self . '" method="post">
            <button type="submit" name="logout-submit" class="admin-btn">Logout</button>
        </form>
        </div>';
    } else {
        $loginForm = '
        <div class="' . $class . '">

        <form action="includes/login.inc.php" method="post">
            <label for="user">Username</label>
            <input type="text" name="uname" id="user" placeholder="Username" autocomplete="username">' . $errorUser . '

            <label for="pwd">Password</label>
            <input type="password" name="pass" id="pwd" placeholder="Password" autocomplete="current-password">' . $errorPass . '

            <button type="submit" name="login-submit" class="admin-btn">Login</button>
        </form>
        </div>';
    }

    if ($form === 'loginForm-body') {
        return $loginForm;
    } elseif ($form === 'loginForm-header') {
        return $loginForm;
    } else {
        return $form;
    }

};

// Function that take a 2 parameters and return H tag.
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

// TODO remove function not in use.
function getExtension() {
    # Initialization.
    // Define arrays to hold data from each file.
    $fileNames = array();
    $files = array();

    // Create a handle
    $handle = opendir('data');

    // Open directory and read contents.
    while (false !== ($file = readdir($handle))) {
        // Check if file extension is valid to read
        if (is_file('data/' . $file)) {
            $path_extension = pathinfo($file);
            if ($path_extension['extension'] != 'html') {
                echo "<p>data $file : INVALID FILE EXTENSION- should be .txt</p>";
            }
            if ($path_extension['extension'] == 'html') {
                $fileNames[] = pathinfo($file, PATHINFO_FILENAME);
                $files[] = $file;
            }
        }
    }
    fclose($handle);
}

/*
<a href="signup.php">Signup</a>
 */
