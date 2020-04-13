<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='//fonts.googleapis.com/css?family=Roboto:300,400,700,400italic,700italic' rel='stylesheet'
        type='text/css'>
    <link rel="stylesheet" href="css/style.css">
    <title>DCS | Home</title>
</head>

<body>
    <div class="main-wrapper">
        <?php include 'includes/header.php';?>
        <div class="main-frame">
            <?php // Create a handle
                $handle = opendir('data');

                // Open directory and read contents.
                while (false !== ($file = readdir($handle))) {

                    // Check if file extension is valid to read
                    if (is_file('data/' . $file)) {
                        $path_extension = pathinfo($file);
                        if ($path_extension['extension'] != 'html') {
                            echo "<p> data $file : INVALID FILE EXTENSION- should be .html</p>";
                        }
                        if ($path_extension['extension'] == 'html') {
                            $fileNames[] = pathinfo($file, PATHINFO_FILENAME);
                            $files[] = $file;
                        }
                    }
                }
                // Close handle.
                closedir($handle);
            ?>
        </div>
    </div>
</body>

</html>