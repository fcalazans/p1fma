<?php
if (isset($_POST['login-submit'])) {
    $username = $_POST['uname'];
    $passTyped = $_POST['pass'];

    if (empty($username) || empty($passTyped)) { // Error handling for empty fields.
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
                    $formData[] = $data;
                }
            }
            fclose($handle);
        }
        $userTemp = array();
        foreach ($formData as $item) {
            $userTemp[] = $item[4];
            $passTemp[] = $item[5];

        }
        var_dump($userTemp); // TODO improve!!!
        var_dump($passTemp); // TODO improve!!!

        var_dump($formData); // TODO improve!!!
        var_dump($username); // TODO improve!!!
        var_dump($passTyped); // TODO improve!!!
        // if ($result === false) {
        //     header("Location: ../login.php?login=error");
        //     exit();
        // } else {
        //     header("Location: ../login.php?login=success");
        //     exit();
        // }

    }

} else {
    header("Location: ../login.php");
    exit();
}