<?php
include ('menubalk.html');
include ('footer.html');

include ('database.php');


$server = 'localhost';
$username = 'maik';
$password = 'root';
$database = 'twdforum';

if (isset($_POST['submit'])) {
    try {
        $conn = new PDO("myslq:host=$server;dbname=$database;", $username, $password);


    } catch (PDOException $e) {
        die("Geen connectie: " . $e->getMessage());
    }

    if (!empty($_POST['email']) && !empty($_POST['wachtwoord'])):
        //Nieuwe gebruiker in database toevoegen
    endif;
}   else {

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
    <form action="register.php" method="post">
        <input required type="text" class="regemail" name="regemail" placeholder="E-mail">
        <input required type="text" class="gebruikersnaam" name="gb" placeholder="Gebruikersnaam">
        <input required type="password" class="wachtwoord" name="regwachtwoord" placeholder="Wachtwoord">
        <input required type="password" class="hhwachtwoord" name="Herhaal wachtwoord" placeholder="Herhaal wachtwoord">
        <input type="hidden" name="submit" value="true">
        <input type="submit" class="regregisterknop" id="submit" value="Registreren">
        <a href="login.php"> <input type="button" class="reglogin" value="Login"></a>
    </form>


</section>
<?php
}
?>




</body>
</html>