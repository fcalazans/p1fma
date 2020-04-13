<!-- Any change to start -->
<?php

    function makeForm($form) {

        $loginForm = '<div class="form">
    <label for="fn">User</label>
    <input placeholder="Username" type="text" name="username" id="user" value="username">


    <label for="pass">Pass</label>
    <input placeholder="Password" type="password" name="favourite" id="fav" value="password">

    <input class="admin" type="submit" name="submitdetails" value="login">
    <!-- <input type="submit" name="submit" value="Admin" /> --> </div>';

        if ($form === "loginForm") {
            echo $loginForm;
        } else {

            return $form;
    }
}