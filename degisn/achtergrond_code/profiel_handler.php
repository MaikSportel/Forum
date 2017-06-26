<?php
$username_used = null;
$verander_gb_message = null;



if (isset($_POST['verander_gb'])) {

//Gegevens uit het register formulier halen
$username = htmlentities($_POST['gb']);

//Kijken of de username al in de database voorkomt
$check_username = $dbh->prepare('SELECT * FROM users WHERE username = :username');
$check_username->execute([':username' => $username]);


//Error voor als de username al in gebruik is
if($check_username->rowCount() > 0){
$username_used = '<p>Je gebruikersnaam is helaas al in gebruik, probeer het nog een keer!</p>';
}

//De gegevens in de database pompen
else {
$change_gb = $dbh->prepare('SELECT username FROM users WHERE userername = :username UPDATE users (username) VALUES (:username)');
    $change_gb->execute([':username' => preg_replace('/\s+/', '', $username)]);
    $verander_gb_message = '<section>Je gebruikersnaam is aangepast!</section>';
}


}




















//if (isset($_POST['updategb'])) {
//
//    //Gegevens uit het register formulier halen
//    $username = htmlentities($_POST['updateNaam']);
//    // Kijken of de ingevoerde gebruikersnaam al in de database staat
//    $check_username = $dbh->prepare('SELECT * FROM users WHERE username = :username');
//    $check_username->execute([':username' => $username]);
//
//    //Foutmelding voor als de gebruikersnaam al voorkomt in de database
//    if($check_username->rowCount() > 0){
//        $username_used = '<p>Helaas word je gebruikersnaam al gebruikt, probeer eens een andere!</p>';
//    }
//
//    else {
//        $create_account = $dbh->prepare('UPDATE users SET username = :username WHERE users.username == $_SESSION["username"]');
//        $create_account->execute([':username' => preg_replace('/\s+/', '', $username)]);
//        $verander_gb = '<section>Je gebruikersnaam is succesvol gewijzigd!</section>';
//    }
//}
