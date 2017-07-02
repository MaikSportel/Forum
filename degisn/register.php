<?php
session_start();
if(isset($_SESSION['username'])) {
    header('Location: profiel.php');
    exit(0);
}
include ('menubalk.html');
include ('footer.html');
// Register handler
include('../src/registreren_handler.php');


    ?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registreer</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

    <section class="bloklogin">
        <form method="POST">
            <section>
                <input required type="email" class="regemail" name="regemail" placeholder="E-mail">
                <?= $email_used ?>
            </section>
            <section>
                <input required type="text" class="gebruikersnaam" name="gb" placeholder="Gebruikersnaam">
                <?= $username_used ?>
            </section>

            <section>
            <input required type="password" class="wachtwoord" name="regwachtwoord" placeholder="Wachtwoord">
                <?= $password_error ?>
            </section>
            <section>
            <input required type="password" class="hhwachtwoord" name="herhaal_wachtwoord" placeholder="Herhaal wachtwoord">
                <?= $no_match ?>
            </section>
            <?=  $register_message ?>
            <input type="hidden" name="submit" value="true">
            <input name="register" type="submit" class="regregisterknop" id="submit" value="Registreren">
            <a href="login.php"> <input type="button" class="reglogin" value="Login"></a>
        </form>
    </section>
    </body>
    </html>
