<?php require_once 'includes/functions.php';?>

<header class="header-bar">
    <a href="index.php"><img class="logo" src="img/logo.svg" alt="DCS Logo"></a>
    <span>Computer Science Department</span>
    <?php echo makeForm("loginForm"); ?>
</header>
<nav class="main-nav">
    <ul>
        <li><a href="index.php"><img src="img/home-btn.svg" alt="Home"></a></li>
        <li><a href="<?php displayPage("about");?>">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Intranet</a></li>
    </ul>
</nav>