<?php
include ('menubalk.html');
include ('footer.html');
include('../src/serie_topic.php');
session_start();
if(isset($_SESSION['username'])) {

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Maak je topic aan </title>
    <link rel="stylesheet" href="css/style.css">


</head>
<body>

<section class="blok">
    <img class="topic_aanmaken_titel" src="css/img/Topic_aanmaken.png">

    <form method="POST">
        <input type="text" class="topic_gb" name="topic_gb" placeholder="Je gebruikersnaam">
        <input type="text" class="topic_titel" name="topic_titel" placeholder="Titel">
        <textarea class="topic_inhoud" name="topic_inhoud">
            Typ hier uw tekst...
        </textarea>
        <?= $topic_error ?>
        <input type="submit" class="topic_aanmaken_button" name="topic_aanmaken_button" value="Topic aanmaken">
        <?= $topic_aangemaakt ?>
    </form>





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