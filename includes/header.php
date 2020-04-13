<?php require_once 'includes/functions.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='//fonts.googleapis.com/css?family=Roboto:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
    <title>DCS | Home</title>
</head>

<body>
    <div class="main-wrapper">
        <header class="header-bar">
            <a href="index.php"><img class="logo" src="logo.svg" alt="DCS Logo"></a>
            <span>Computer Science Department</span>
            <?php makeForm("loginForm");?>
        </header>
        <nav class="main-nav">
            <ul>
                <li><a href="index.php"><img src="home-btn.svg" alt="Home"></a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Intranet</a></li>
            </ul>

        </nav>

    </div>
</body>

</html>