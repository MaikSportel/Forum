<?php
include ('menubalk.html');
include ('footer.html');

if (!empty($_POST['email']) && !empty($_POST['wachtwoord'])):

endif;


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
    <form action="login.php" method="post">
        <input required type="text" class="email" name="email" placeholder="E-Mail">
        <input required type="password" class="wachtwoord" name="wachtwoord" placeholder="Wachtwoord">
        <input type="hidden" name="submit" value="true">
        <input type="submit" class="loginknop" id="submit" value="Login">
        <a href="register.php"> <input type="button" class="registerknop" value="Registreren"></a>
    </form>



</section>



</body>
</html>