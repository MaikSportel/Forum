<?php
include ('menubalk.html');
include ('footer.html');
session_start();
if(isset($_SESSION['username'])) {

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Games </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<section class="blok">
    <img class="gamestitel" src="css/img/gamestitel.png">
    <section class="createtopicbutton">
        <?php
        if(empty($_SESSION['username']))
        {
        }else{
            echo '<a href="create_games_topic.php"><input class="topicbutton" type="button" value="Maak een topic aan"></a>';
        }
        ?>
    </section>



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