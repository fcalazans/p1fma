<?php
    require_once 'includes/functions.php';
    $title = 'Signup';
    include 'includes/header.php';
    makeHeading($title, 1);
?>
<main>
    <div class="main-frame">
        <section>
            <hr />
            <br>
            <form action="includes/signup.php" method="post">

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
                <input type="text" name="fname" id="name" placeholder="First name" autocomplete="name">

                <label for="last-name">Surname</label>
                <input type="text" name="lname" id="last-name" placeholder="Surname" autocomplete="family-name">

                <label for="user">Email</label>
                <input type="text" name="mail" id="user" placeholder="Email" autocomplete="email">

                <label for="user">Username</label>
                <input type="text" name="uname" id="user" placeholder="Username" autocomplete="username">

                <label for="pwd">Password</label>
                <input type="password" name="pass" id="pwd" placeholder="Password" autocomplete="current-password">

                <button type="submit" name="login-submit" class="admin-btn">Login</button>
            </form>
            <br>
            <hr />
        </section>
    </div>
</main>

<?php
    require 'includes/footer.php';
?>
<!--  Mr. Mrs. Miss Ms -->