<?php
    $title = 'New User';
    include 'includes/header.php';

    // Initialize error variables.
    $message = $errorPass = $errorTitle = $errorUser = $errorlname = $errorfname = $errorEmail = '<span></span>';

    if (!isset($_SESSION['username'])) {
        header("Location: login.php?error=notadmin");
        exit();
    } else if ($_SESSION['username'] != 'admin') {
        header("Location: login.php?error=notadmin");
        exit();
    }
    // Displaying error messages for empty fields.
    if (isset($_GET['error'])) {
        if ($_GET['error'] == 'emptyfields') {
            if (isset($_GET['title']) && empty($_GET['title'])) {
                $errorTitle = '<span>Title is required field</span>';
            }
            if (isset($_GET['fname']) && empty($_GET['fname'])) {
                $errorfname = '<span>First name is a required field</span>';
            }
            if (isset($_GET['lname']) && empty($_GET['lname'])) {
                $errorlname = '<span>Surname is a required field</span>';
            }
            if (isset($_GET['mail']) && empty($_GET['mail'])) {
                $errorEmail = '<span>Email is required a field</span>';

            } else {
                $message = '</br><span>All fields are required</span>';
            }
        }

        // Displaying error messages for invalid fields.
        if ($_GET['error'] == 'invalidemail') {
            $errorEmail = '<span>Enter a valid Email.</span>';
        }

        if ($_GET['error'] == 'passwordnotmatch') {
            $errorPass = '<span>Enter a match Password.</span>';
        }

        if ($_GET['error'] == 'nameinvalid' && !ctype_alpha(str_replace(' ', '', $_GET['fname']))) {
            $errorfname = '<span>Name invalid - Only letters allowed.</span>';
        }

        if ($_GET['error'] == 'nameinvalid' && !ctype_alpha(str_replace(' ', '', $_GET['lname']))) {
            $errorlname = '<span>Surname invalid - Only letters allowed.</span>';
        }
        if ($_GET['error'] == 'userinvalid' && !ctype_alnum($_GET['lname'])) {
            $errorUser = '<span>User invalid - Only numbers and letters with no spaces allowed.</span>';
        }
    }
    // Displaying message created successfully.
    if (isset($_GET['signup'])) {
        if ($_GET['signup'] == 'success') {
            $message = '</br><span>New record successfully created.</span>';
        }
    }
?>

<!-- Main body -->
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
        </select><?php echo $errorTitle; ?>

        <label for="name">First name</label>
        <input type="text" name="fname" id="name"
            value="<?php if (isset($_GET['fname'])) {echo htmlentities($_GET['fname']);}?>" placeholder="First name"
            autocomplete="name"><?php echo $errorfname; ?>

        <label for="last-name">Surname</label>
        <input type="text" name="lname" id="last-name"
            value="<?php if (isset($_GET['lname'])) {echo htmlentities($_GET['lname']);}?>" placeholder="Surname"
            autocomplete="family-name"><?php echo $errorlname; ?>

        <label for="email">Email</label>
        <input type="text" name="mail" id="email"
            value="<?php if (isset($_GET['mail'])) {echo htmlentities($_GET['mail']);}?>" placeholder="Email"
            autocomplete="email"><?php echo $errorEmail; ?>

        <label for="user">Username</label>
        <input type="text" name="uname" id="user"
            value="<?php if (isset($_GET['uname'])) {echo htmlentities($_GET['uname']);}?>" placeholder="Username"
            autocomplete="username"><?php echo $errorUser; ?>

        <label for="pwd">Password</label>
        <input type="password" name="pass" id="pwd" placeholder="Password">

        <label for="pwd-repeat">Repeat Password</label>
        <input type="password" name="pass-repeat" id="pwd-repeat" placeholder="Repeat Password">

        <button type="submit" name="signup-submit" class="admin-btn">New User</button>
    </form><?php echo $message; ?>
</div>

<!-- Footer -->
<?php require 'includes/footer.php';?>