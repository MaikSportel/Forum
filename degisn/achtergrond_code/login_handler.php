<?php
include ('database.php');

session_start();
$login_error = null;




if (isset($_POST['login'])) {

    $username = htmlentities($_POST['email_gb']);
    $password = htmlentities($_POST['wachtwoord']);

    if (!$username || !$password) {
        $login_message = '<p>Please fill in an username and password.</p>';
    }
    else {
        $login_query = $dbh->prepare('select * from users where password = :password and username = :username');
        $login_query->execute([
            ':password' => hash('sha512', $password),
            ':username' => preg_replace('/\s+/', '', $username)
        ]);
        if ($login_query->rowCount() > 0) {
            $row = $login_query->fetch();
            $_SESSION['username'] = $row['username'];
            $_SESSION['admin'] = $row['admin'];
            header("Location: profiel.php");
            exit(0);
        } else {
            $login_error = '<p>Incorrect username and password.</p>';
        }
    }







}
?>


