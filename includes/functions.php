<?php

// Function that generate a form according to the parameter passed.
function makeForm($form) {

    $loginForm = '<div class="form">
    <label for="username">Username</label>
    <input placeholder="Username" type="text" name="username" id="username" value="username">

    <label for="pass">Password</label>
    <input placeholder="Password" type="password" name="favourite" id="fav" value="password">

    <input class="admin-btn" type="submit" name="submitdetails" value="login">';

    if ($form === "loginForm") {
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

    $handle = fopen($data, 'r');

    while (!feof($handle)) { // While is not the end of the file.
        $name = fgets($handle); // Get the content of the page until EOL.
        echo $name;
    }
    fclose($handle);
};