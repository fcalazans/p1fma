<?php
    require_once 'includes/functions.php';
    $title = 'About';
    include 'includes/header.php';

?>
<main>
    <div class="main-frame">
        <section>
            <?php makeHeading($title, 1);?>
            <hr />
            <br>
            <p>
                The Department of Computer Science and Information Systems at Birkbeck traces
                its roots back to 1946 when the College’s first computer was built in the
                Computer Laboratory founded by Dr Andew Booth. The Department of Computer
                Science was established in 1957 and information about these early years can be
                viewed in our history. Today the Department continues as a leading centre of
                computing expertise, specialising in information and knowledge management, web
                and pervasive technologies, computational intelligence and information systems
                development.
            </p>
            <br>
            <hr />
        </section>
    </div>
</main>

<?php
require 'includes/footer.php';
?>