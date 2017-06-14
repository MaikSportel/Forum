<?php
include ('menubalk.html');


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
<form action="register.php" method="post">
        <input type="text" placeholder="E-mail" name="email" >
        <input type="password" placeholder="Wachtwoord" name="wachtwoord">
        <input type="password" placeholder="Herhaal wachtwoord" name="herhaalwachtwoord">
        <input type="button" class="registreren" value="Registreren">
        <a href="login.php"><input type="button" class="inloggen" value="Login"></a>
</form>



</section>


<footer>
    <section class="footer">
        Copyright by Maik ©
    </section>
</footer>

</body>
</html>