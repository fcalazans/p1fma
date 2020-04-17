<?php
    require_once 'includes/functions.php';
    $title = 'Login';
    include 'includes/header.php';
    $login = makeForm("loginForm-header");
?>

<main>
    <div class="main-frame">
        <section>
            <?php makeHeading($title, 1);?>
            <hr />
            <br>
            <?php echo $login ?>
            <br>
            <hr />
        </section>
    </div>
</main>

<!-- Footer -->

<?php
require 'includes/footer.php';
?>