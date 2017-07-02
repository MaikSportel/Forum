<?php
include('database.php');

$register_message = null;
$username_used = null;
$email_used = null;
$password_error = null;
$no_match = null;


if (isset($_POST['register'])) {

    //Gegevens uit het register formulier halen
    $username = htmlentities($_POST['gb']);
    $email = htmlentities($_POST['regemail']);
    $password = htmlentities($_POST['regwachtwoord']);
    $confirmpassword = htmlentities($_POST['herhaal_wachtwoord']);

    //Checken of alle velden ingevoerd zijn
    if (!$username || !$email || !$password || !$confirmpassword) {
        $register_message = '<section>Je hebt niet alle velden ingevoerd, vul alle velden in!</section>';
    }

    //Kijken of de username al in de database voorkomt
    $check_username = $dbh->prepare('SELECT * FROM users WHERE username = :username');
    $check_username->execute([':username' => $username]);

    //Kijken of het email adres al in de database voorkomt
    $check_email = $dbh->prepare('SELECT * FROM users WHERE email = :email');
    $check_email->execute([':email' => $email]);

    //Error voor als de username al in gebruik is
    if($check_username->rowCount() > 0){
        $username_used = '<p>Je gebruikersnaam is helaas al in gebruik, probeer het nog een keer!</p>';
    }
    //Error als de email al in gebruik is
    elseif ($check_email->rowCount() > 0) {
        $email_used = '<p>Je email adres is helaas al in gebruik, probeer het nog een keer!</p>';
    }
    //Error als de wachtwoorden al in gebruik zijn
    elseif (strlen($password) < 7) {
        $password_error = '<p>Sorry je wachtwoord is te kort, probeer het nog een keer!</p>';
    }
    //Error voor als de wachtwoorden niet gelijk zijn
    elseif ($password != $confirmpassword) {
        $no_match = '<p>Sorry je wachtwoorden komen niet overeen, probeer het nog een keer!</p>';
    }
    //De gegevens in de database pompen
    else {
        $create_account = $dbh->prepare('INSERT INTO users (username, email, password) VALUES (:username, :email, :password)');
        $create_account->execute([':username' => preg_replace('/\s+/', '', $username), 'email' => $email, ':password' => hash('sha512', $password)]);
        $register_message = '<section>Je account is aangemaakt! <a href="1forumphp/degisn/login.php">Login</a>.</section>';
    }


}




















































//$register_message = null;
//$username_used = null;
//$email_used = null;
//$password_error = null;
//$no_match = null;
//if (isset($_POST['register'])) {
//    $username = htmlentities($_POST['gb']);
//    $email = htmlentities($_POST['regemail']);
//    $password = htmlentities($_POST['regwachtwoord']);
//    $confirmpassword = htmlentities($_POST['Herhaal_wachtwoord']);maik
//    if (!$username || !$email || !$password || !$confirmpassword) {
//        $register_message = '<div class="alert alert-danger" role="alert">Please fill in all fields.</div>';
//    } else {
//        $check_username = $dbh->prepare('select * from users where username = $username');
//        $check_username->execute([
//            ':username' => $username
//        ]);
//        $check_email = $dbh->prepare('select * from users where email = $email');
//        $check_email->execute([
//            ':email' => $email
//        ]);
//        if ($check_username->rowCount() > 0) {
//            $username_used = '<p class="text-danger">Sorry, that username is taken. Try another?</p>';
//        } elseif ($check_email->rowCount() > 0) {
//            $email_used = '<p class="text-danger">Sorry, that email is taken. Try another?</p>';
//        } elseif (strlen($password) < 7) {
//            $password_error = '<p class="text-danger">Sorry, your password is too short.</p>';
//        } elseif ($password != $confirmpassword) {
//            $no_match = '<p class="text-danger">Sorry, your passwords do not match.</p>';
//        } else {
//            $create_account = $dbh->prepare('insert into users (username, email, password) values (:username, :email, :password)');
//            $create_account->execute([
//                ':username' => preg_replace('/\s+/', '', $username),
//                ':email' => $email,
//                ':password' => hash('sha512', $password)
//            ]);
//            $register_message = '<div class="alert alert-success" role="alert">Your account has been created, <a href="index.php">login</a>.</div>';
//        }
//    }
//}