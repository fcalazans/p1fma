<?php
    require_once 'includes/functions.php';
    $title = 'Signup';
    include 'includes/header.php';

?>
<main>
    <div class="main-frame">
        <section>
            <?php makeHeading($title, 1);?>
            <hr />
            <br>
            <div class="loginForm-body">
                <form action="includes/signup.inc.php" method="post">

                    <label for="titles">Title</label>
                    <select name="title" id="titles">
                        <option value="" disabled selected>Select your title</option>
                        <option value="mr">Mr.</option>
                        <option value="mrs">Mrs.</option>
                        <option value="miss">Miss</option>
                        <option value="ms">Ms</option>
                        <option value="other">Other</option>
                    </select>

                    <label for="name">First name</label>
                    <input type="text" name="fname" id="name" placeholder="First name" autocomplete="name"><span></span>

                    <label for="last-name">Surname</label>
                    <input type="text" name="lname" id="last-name" placeholder="Surname" autocomplete="family-name">

                    <label for="user">Email</label>
                    <input type="text" name="mail" id="user" placeholder="Email" autocomplete="email">

                    <label for="user">Username</label>
                    <input type="text" name="uname" id="user" placeholder="Username" autocomplete="username">

                    <label for="pwd">Password</label>
                    <input type="password" name="pass" id="pwd" placeholder="Password">

                    <label for="pwd-repeat">Repeat Password</label>
                    <input type="password" name="pass-repeat" id="pwd-repeat" placeholder="Repeat Password">

                    <button type="submit" name="signup-submit" class="admin-btn">Submit</button>
                </form>
            </div>
            <br>
            <hr />
        </section>
    </div>
</main>
<!-- Footer -->
<!-- http://localhost/p1fma/signup.php?error=emptyfields&title=&fname=&lname=&mail=&uname= -->
<?php
require 'includes/footer.php';
?>