<?php
require_once 'includes/functions.php';
$title = 'Login';
// $login = makeForm("loginForm-header");
$loginBody = makeForm("loginForm-body");
include 'includes/header.php';
makeHeading($title, 1);
echo '
<hr />
<br>';
// $php = 'data/P1results.html';
// $dt = 'data/DTresults.html';
// $pfp = 'data/PfPresults.html';
echo $loginBody;
