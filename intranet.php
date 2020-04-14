<?php
    require_once 'includes/functions.php';
    include 'includes/header.php';
    $php = 'data/P1results.html';
    $dt = 'data/P1results.html';
    $pfp = 'data/PfPresults.html';
    $title = 'Intranet';

    makeHeading($title, 1);

    $body = displayBody($php);

    if ($body) {
        # code...
    }
    ;

?>

<h2>Module Results</h2><span>Welcome User - You are logged in.</span>
<ul>
    <li><a href="">Web Programming using PHP - P1 Results</a></li>
    <li><a href="#">Introduction to Database Technology - DT Results</a></li>
    <li><a href="#">Problem Solving for Programming - PfP Results</a></li>
</ul>


<?php

?>