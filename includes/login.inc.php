<?php
if (isset($_POST['login-submit'])) {
    $userTyped = $_POST['uname'];
    $passTyped = $_POST['pass'];

    if (empty($userTyped) || empty($passTyped)) { // Error handling for empty fields.
        header("Location: ../login.php?error=emptyfields");
        exit();

    } else { // Perform the task without error.
        $formData = array();

        if (is_file('../data/form-data.txt')) {
            $handle = fopen('../data/form-data.txt', 'r') or die('Failed to open the file');
        } else {
            header("Location: ../login.php?error=databasecrash");
            exit();
        }

        if ($handle == false) {
            echo "system error";

        } else { // Proceed without error.
            while (!feof($handle)) {

                $data = fgetcsv($handle);

                if (!$data === false && array(null) !== $data) {

                    $formData[] = array(
                        'title' => $data[0],
                        'fname' => $data[1],
                        'surname' => $data[2],
                        'mail' => $data[3],
                        'uname' => $data[4],
                        'pass' => $data[5]);
                }
            }
            fclose($handle);
        }

        $userFound = false;
        $adminOn = false; // TODO implement admin is on.
        foreach ($formData as $database) {
            if ($pwdCheck = password_verify($passTyped, $database['pass']) && $userTyped == $database['uname']) {
                $userSession = array(
                    'title' => $database['title'],
                    'firstname' => $database['fname'],
                    'lastname' => $database['surname'],
                    'username' => $database['uname'],
                    'email' => $database['mail'],
                );
                $userFound = true;
            }
        }

        if ($userFound == false) {
            header("Location: ../login.php?error=nouser");
            exit();
        } else {
            session_start();
            $_SESSION['title'] = $userSession['title'];
            $_SESSION['firstname'] = $userSession['firstname'];
            $_SESSION['lastname'] = $userSession['lastname'];
            $_SESSION['username'] = $userSession['username'];
            $_SESSION['email'] = $userSession['email'];

            header("Location: ../index.php?login=success");
            exit();
        }
        // var_dump($formData); // TODO improve!!!
    }

} else {
    header("Location: ../login.php");
    exit();
}