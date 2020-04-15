<?php
require_once 'includes/functions.php';
$title = 'Intranet';
include 'includes/header.php';
$links = array();
$php = 'data/P1results.html';
$dt = 'data/DTresults.html';
$pfp = 'data/PfPresults.html';
$user = 'Fabio';
makeHeading($title, 1);
$body = displayBody($dt);

$index = '<h2>Module Results</h2><span>Welcome ' . $user . ' You are logged in.</span>
<div class="links">
<a href="index.php?body=P1results.html">Web Programming using PHP - P1 Results</a>
<a href="#">Introduction to Database Technology - DT Results</a>
<a href="#">Problem Solving for Programming - PfP Results</a>
</div>
</div>
</div>
</body>

</html>';
echo $index;