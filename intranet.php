<?php
    $title = 'Intranet';
    require 'includes/header.php';
    $php = 'data/P1results.php';
    $dt = 'data/DTresults.php';
    $pfp = 'data/PfPresults.php';
?>

<!-- Main body -->
<?php makeHeading('Module Results', 2)?>

<div class="links">
    <a href="?php=true">Web Programming using PHP - P1 Results</a>
    <a href="?dt=true">Introduction to Database Technology - DT Results</a>
    <a href="?pfp=true">Problem Solving for Programming - PfP Results</a>
</div>

<?php
    if (isset($_SESSION['username'])) {

        // Display the module results.
        if (isset($_GET['php'])) {
            displayBody($php);
        } elseif (isset($_GET['dt'])) {
            displayBody($dt);
        } elseif (isset($_GET['pfp'])) {
            displayBody($pfp);
        } else {
            $index;
        }
    } else {
        header("Location: login.php");
        exit();
    }
?>

<!-- Footer -->
<?php require 'includes/footer.php';?>