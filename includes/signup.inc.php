<?php
if (isset($_POST['signup-submit'])) {

    $title = $_POST['title'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mail = $_POST['mail'];
    $username = $_POST['uname'];
    $password = $_POST['pass'];
    $passwordRepeat = $_POST['pass-repeat'];

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
        header("Location: ../signup.php?error=emptyfields&title=" . $title .
            "&fname=" . $fname .
            "&lname=" . $lname .
            "&mail=" . $mail .
            "&uname=" . $username);
        exit();

    } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidemail&title=" . $title .
            "&fname=" . $fname .
            "&lname=" . $lname .
            "&mail=" . $mail .
            "&uname=" . $username);
        exit();

    } else if ($password !== $passwordRepeat) {
        header("Location: ../signup.php?error=passwordnotmatch&title=" . $title .
            "&fname=" . $fname .
            "&lname=" . $lname .
            "&mail=" . $mail .
            "&uname=" . $username);
        exit();
    }

    /*
    End of form error handlers.
     */

    // TODO create here the validation for email with elseif repeating header()
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
    header("Location: ../signup.php"); // HACK This is how not allow user to access to this page by typing in the address bar.
    exit();
}