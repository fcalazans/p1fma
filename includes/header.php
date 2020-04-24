<?php
    session_start();
    require_once 'functions.php';

    // Logout destroy the session
    if (isset($_POST['logout-submit'])) {
        session_unset();
        session_destroy();
        header("Location: ../index.php?logout=success");
        exit();
    }

    $loginHeader = makeForm("loginForm-header");
    echo '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/style.css">
    <title> DCS | ' . $title . '</title>
</head>

<body>
    <div class="main-wrapper">
        <header class="header-bar">
            <a href="index.php"><img class="logo" src="img/logo.svg" alt="DCS Logo"></a>
            <span>Computer Science Department</span>
            ' . $loginHeader . '
        </header>
        <nav class="main-nav">
            <ul>
                <li><a href="index.php"><img src="img/home-btn.svg" alt="Home"></a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="intranet.php">Intranet</a></li>
                <li><a href="signup.php">Admin</a></li>
            </ul>
        </nav>
        <main>
            <div class="main-frame">
                <section>';

    // TODO change the way login message appears.($_GET from header(Location:))
    if (isset($_SESSION['username'])) {
        $loginStatus = '<span class= "login-status">You are logged in!</span>';
    } else {
        $loginStatus = '<span class= "login-status">You have been logged out!</span>';
    }
    makeHeading($title, 1);
    echo $loginStatus;

    // TODO Cite all DCS content used on the paragraphs.
    // TODO Remove Intranet from menu if admin is in.
?>
<hr />
<br>