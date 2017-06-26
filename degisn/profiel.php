<?php
session_start();
include ('achtergrond_code/database.php');
if(!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit(0);
}
include ("menubalk.html");
include ("footer.html");
include ("achtergrond_code/profiel_handler.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $_SESSION['username']; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="blok">
    <form method="POST">
        <section>
            <input required type="text" class="gebruikersnaam" name="gb" placeholder="Gebruikersnaam">
            <?= $username_used ?>
        </section>

        <input type="hidden" name="submit" value="true">
        <input name="verander_gb" type="submit" class="verandergb" id="submit" value="Verander gebruikersnaam">
        <?= $verander_gb_message ?>
        </form>

    <a href="achtergrond_code/logout.php">Logout</a>
</section>
<section class="lastpost">
    <i>Hier komen de laatste posts</i>
</section>
<section class="twitter">
    <a class="twitter-timeline"  href="https://twitter.com/hashtag/twd" data-widget-id="865588685013532673">Tweets over #twd</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

</section>

</body>
</html>
