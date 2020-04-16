<?php
require_once 'includes/functions.php';
$title = 'Intranet';
require 'includes/header.php';

$php = 'data/P1results.html';
$dt = 'data/DTresults.html';
$pfp = 'data/PfPresults.html';

$user = 'Fabio';

echo '
<div class="main-frame">' . makeHeading($title, 1) . '
    <br>
    <hr/>
    ' . makeHeading('Module Results', 2) . '
    <span>Welcome ' . $user . ' You are logged in.</span>
    <div class="links">
        <a href="?php=true">Web Programming using PHP - P1 Results</a>
        <a href="?dt=true">Introduction to Database Technology - DT Results</a>
        <a href="?pfp=true">Problem Solving for Programming - PfP Results</a>
    </div>
    <br>
    <hr/>
</div>';

if (isset($_GET['php'])) {
    displayBody($php);
} elseif (isset($_GET['dt'])) {
    displayBody($dt);
} elseif (isset($_GET['pfp'])) {
    displayBody($pfp);
} else {
    $index;
}
require 'includes/footer.php';

// TODO Change all include (header and footer) change for require.
// TODO Include semantic <main> tag on all pages that need to interact with body.
// TODO Remove all unnecessary code.