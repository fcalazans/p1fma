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

    function displayPage($page) {
        $about = '<h1>About</h1>
<hr />
<p>
    The Department of Computer Science and Information Systems at Birkbeck traces
    its roots back to 1946 when the College’s first computer was built in the
    Computer Laboratory founded by Dr Andew Booth. The Department of Computer
    Science was established in 1957 and information about these early years can be
    viewed in our history. Today the Department continues as a leading centre of
    computing expertise, specialising in information and knowledge management, web
    and pervasive technologies, computational intelligence and information systems
    development.
</p>
<hr />';

        $contact = '<h1>Contact</h1>
<hr />
<p>Our address</p>
<p>Department of Computer Science and Information Systems</p>
<p>Birkbeck, University of London</p>
<p>Malet Street</p>
<p>London WC1E 7HX</p>
<p>+44 (0)20 7631 6700</p>
<p>Directions, transport, maps and accommodation</p>
<hr />';

        $services = '<h1>Services</h1>
<hr />
<p>Undergraduate</p>
<p>Postgraduate</p>
<p>Postgraduate Specialist</p>
<p>Postgraduate Research</p>
<p>Short Courses and Certificates</p>
<p>Modules</p>
<p>Fees</p>
<hr />';

        if ($page == "about") {
            return $about;
        } elseif ($page == "contact") {
            return $contact;
        } elseif ($page == "services") {
            return $services;
    }
}