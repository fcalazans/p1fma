<?php
    $title = 'Intranet';
    require 'includes/header.php';
    $php = 'data/P1results.php';
    $dt = 'data/DTresults.php';
    $pfp = 'data/PfPresults.php';
    $user = '';
?>

<!-- Main body -->
<?php makeHeading('Module Results', 2)?>
<span>Welcome<?php echo " " . $user . " " ?> You are logged in.</span>
<div class="links">
    <a href="?php=true">Web Programming using PHP - P1 Results</a>
    <a href="?dt=true">Introduction to Database Technology - DT Results</a>
    <a href="?pfp=true">Problem Solving for Programming - PfP Results</a>
</div>

<?php
    // TODO change the way login message appears.($_GET from header(Location:))
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

    // TODO Change all include (header and footer) change for require.
    // TODO Include semantic <main> tag on all pages that need to interact with body.
    // TODO Remove all unnecessary code.
?>

<!-- Footer -->
<?php require 'includes/footer.php';?>