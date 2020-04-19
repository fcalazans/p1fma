<?php
    require_once 'includes/functions.php';
    $title = 'Home';

    require 'includes/header.php';
?>

<main>
    <div class="main-frame">
        <section>
            <?php makeHeading($title, 1);?><?php
    if (isset($_SESSION['username'])) {
        echo '<span class= "login-status">You are logged in!</span>';
    } else {
        echo '<span class= "login-status">You have been logged out!</span>';
    }

?>
            <hr />
            <br>
            <p>
                The Department of Computer Science and Information Systems at Birkbeck is one of the first computing
                departments established in the UK, celebrating our 60th anniversary in 2017. We provide a stimulating
                teaching and research environment for both part-time and full-time students, and a friendly, inclusive
                space for learning, working and collaborating.
            </p>
            <br>
            <hr />
        </section>
    </div>
</main>
<!-- Footer -->
<?php
require 'includes/footer.php';
?>