<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <!-- <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css"> -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,700,400italic,700italic"/>

        <title>Sign Up to our Mailing List!</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    </head>

    <body>
        <h1>Sign Up to Our Mailing List!</h1>

        <?php
            $self = htmlentities($_SERVER['PHP_SELF']);
        ?>

        <form action="<?php echo $self; ?>" method="post">
            <fieldset>
			<legend>Sign Name</legend>
                <div>
                    <label for="fullName">Full Name</label>
                    <input type="text" name="fname" id="fullName"/>
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" name="mail" id="email" />
                </div>
                <div>
                    <label for="mailFormat">Mail format</label>
                    <select name="format" id="mailFormat">
                        <option value="plain">Plain text</option>
                        <option value="html">HTML</option>
                    </select>
                </div>
                <div>
                    <input type="checkbox" name="terms" id="terms" value="yes" />
                    <label for="terms">Tick this box to confirm you have read our <a href="#">terms and conditions</a></label>
                </div>
                <div>
                    <input type="submit" name="contactsubmit" value="Send Message" />
                </div>
            </fieldset>
        </form>

    </body>
</html>
