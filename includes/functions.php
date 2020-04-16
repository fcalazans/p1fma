<?php

// Function that generate a form according to the parameter passed.
function makeForm($form) {

    $class = 'loginForm-header'; // Change the class on CSS.
    if ($form === 'loginForm-body') {
        $class = 'loginForm-body';
    }
    // Login template for form-body
    $loginForm = '
    <div class="' . $class . '">
        <form action="includes/login.php" method="post">
            <label for="user">Username</label>
            <input type="text" name="uname" id="user" placeholder="Username" autocomplete="username">

            <label for="pwd">Password</label>
            <input type="password" name="pass" id="pwd" placeholder="Password" autocomplete="current-password">

            <button type="submit" name="login-submit" class="admin-btn">Login</button>
        </form>

        <a href="signup.php">Signup</a>

        <form action="includes/logout.php" method="post">
            <button type="submit" name="logout-submit" class="admin-btn">Logout</button>
        </form>
    </div>';

    if ($form === 'loginForm-header') {
        return $loginForm;
    } elseif ($form === 'loginForm-body') {
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