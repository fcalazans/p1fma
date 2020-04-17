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
// ||
        foreach ($formData as $database) {
            if ($userTyped == $database['uname'] && $pwdCheck = password_verify($passTyped, $database['pass'])) {
                // header("Location: ../login.php?error=nouser");
                // exit();
                var_dump($pwdCheck);
            } else {
                var_dump($pwdCheck);
            }
        }
        var_dump($formData); // TODO improve!!!
        var_dump($userTyped);
        var_dump($passTyped);
    }

} else {
    header("Location: ../login.php");
    exit();
}