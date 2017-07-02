<?php
include ('menubalk.html');
include ('footer.html');

session_start();
if(isset($_SESSION['username'])) {
    header('Location: profiel.php');
    exit(0);
}

include('../src/login_handler.php');

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

    <section class="bloklogin">
        <form method="POST">
            <input required type="text" class="email" name="email_gb" placeholder="Vul je email of gebruikersnaam in.">
            <input required type="password" class="wachtwoord" name="wachtwoord" placeholder="Wachtwoord">
            <section>
                <?= $login_error ?>
                <input type="submit" class="loginknop" name="login" value="Login">
                <a href="register.php"> <input type="button" class="registerknop" value="Registreren"></a>
        </form>
    </section>


    </section>


    </body>
    </html>
