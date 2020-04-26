<?php
if (isset($_POST['signup-submit'])) {

    // Information typed by the user in the form.
    $title = $_POST['title'];
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $mail = trim($_POST['mail']);
    $username = trim($_POST['uname']);
    $password = trim($_POST['pass']);
    $passwordRepeat = trim($_POST['pass-repeat']);

    /*
    Form Sanitization starts.
     */
    $fname = ucwords(strtolower($fname));
    $lname = ucwords(strtolower($lname));
    $mail = filter_var($mail, FILTER_SANITIZE_EMAIL);
    $username = strtolower($username);

    /*
    Form Validation starts.
     */

    // Check for empty fields.
    if (empty($title)
        || empty($fname)
        || empty($lname)
        || empty($mail)
        || empty($username)
        || empty($password)
        || empty($passwordRepeat)) {
        header("Location: ../signup.php?error=emptyfields&title=" . htmlentities($title) .
            "&fname=" . htmlentities($fname) .
            "&lname=" . htmlentities($lname) .
            "&mail=" . htmlentities($mail) .
            "&uname=" . htmlentities($username));
        exit();
        // Check for a valid email.
    } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidemail&title=" . htmlentities($title) .
            "&fname=" . htmlentities($fname) .
            "&lname=" . htmlentities($lname) .
            "&mail=" . htmlentities($mail) .
            "&uname=" . htmlentities($username));
        exit();

        // Check if the passwords match.
    } else if ($password !== $passwordRepeat) {
        header("Location: ../signup.php?error=passwordnotmatch&title=" . htmlentities($title) .
            "&fname=" . htmlentities($fname) .
            "&lname=" . htmlentities($lname) .
            "&mail=" . htmlentities($mail) .
            "&uname=" . htmlentities($username));
        exit();

        // Check if first and last name are alphabetic characters. (Valid names)
    } else if (!ctype_alpha(str_replace(' ', '', $fname)) || !ctype_alpha(str_replace(' ', '', $lname))) {
        header("Location: ../signup.php?error=nameinvalid&title=" . htmlentities($title) .
            "&fname=" . htmlentities($fname) .
            "&lname=" . htmlentities($lname) .
            "&mail=" . htmlentities($mail) .
            "&uname=" . htmlentities($username));
        exit();

        // Check if username is alphanumerics. (Valid username)
    } else if (!ctype_alnum($username)) {
        header("Location: ../signup.php?error=userinvalid&title=" . htmlentities($title) .
            "&fname=" . htmlentities($fname) .
            "&lname=" . htmlentities($lname) .
            "&mail=" . htmlentities($mail) .
            "&uname=" . htmlentities($username));
        exit();
    }

    /*
    End of form error handlers.
     */

    // Hashing password before storing in the database.
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    $data = $title . ',' .
        $fname . ',' .
        $lname . ',' .
        $mail . ',' .
        $username . ',' .
        $hashedPwd . PHP_EOL;

    $handle = fopen('../data/form-data.txt', 'a');
    $result = fwrite($handle, $data);
    if ($result === false) {
        header("Location: ../signup.php?signup=error");
        exit();
    } else {
        header("Location: ../signup.php?signup=success");
        exit();
    }

    fclose($handle);

} else {
    header("Location: ../signup.php");
    exit();
}