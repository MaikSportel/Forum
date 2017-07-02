<?php
include("database.php");

$topic_aangemaakt = null;
$topic_error = null;

if (isset($_POST['topic_aanmaken_button'])) {
    //Gegevens uit het formulier halen
    $topic_username = htmlentities($_POST['topic_gb']);
    $topic_titel = htmlentities($_POST['topic_titel']);
    $topic_inhoud = htmlentities($_POST['topic_inhoud']);

    //Kijken of alle velden ingevuld zijn
    if (!$topic_titel || !$topic_inhoud || !$topic_username) {
        $topic_error = '<section>Je hebt 1 van de velden niet ingevoerd.</section>';
    }
    //De gegevens in de database zetten
    else {
//        $create_topic = $dbh->prepare('INSERT INTO topics (auteur, titel, inhoud) WHERE cat.id = 1; VALUES (:topic_username, :topic_titel, :topic_inhoud)');
//        $create_topic->execute([':auteur' => preg_replace('/\s+/', '', $topic_username), ':titel' => $topic_titel, ':inhoud' => $topic_inhoud]);
//        $topic_aangemaakt = '<section>Je topic is aangemaakt</section>';
        try {
            $create_topic = $dbh->prepare('INSERT INTO topics (cat_id, subcat_id, auteur, titel, inhoud) VALUES (?, ?, ?, ?, ?)');
//            $create_topic->execute([':cat_id' => 3, ':subcat_id' => 3, ':auteur' => preg_replace('/\s+/', '', $topic_username), ':titel' => $topic_titel, ':inhoud' => $topic_inhoud]);
            $create_topic->execute(array( 3,  3, preg_replace('/\s+/', '', $topic_username), $topic_titel, $topic_inhoud));
            $topic_aangemaakt = '<section>Je topic is aangemaakt</section>';
        }
        catch (PDOException $pe){
            echo $pe->getMessage();
        }
    }

}