<!-- Any change to start -->
<?php

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
    }

    //     function displayPage($page) {

    //         $contact = '';

    //         if ($page == "about") {
    //             return $page;
    //         } elseif ($page == "contact") {
    //             return $contact;
    //         } elseif ($page == "services") {
    //             return $services;
//     }
// }