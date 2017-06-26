<?php
try {
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=forumtwd', 'maik', 'root');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br>";
    die();
}




//function dbConnect()
//{
//    $server = '127.0.0.1';
//    $username = 'maik';
//    $password = 'root';
//    $database = 'forumtwd';
//
//    try {
//        $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
//    } catch (PDOException $e) {
//        die("Connection failed: " . $e->getMessage());
//    }
//}



//function dbQuery($sql, $params = []) {
//    global $db, $db_statement;
//
//    if($db == null)
//        return false;
//
//    try {
//        $db_statement = $db->prepare($sql);
//        $db_statement->execute($params);
//    } catch (PDOException $error) {
//        return false;
//    }
//    return true;
//}



















//
//function register(){
//    if (!empty($_POST['regemail']) && !empty($_POST['regwachtwoord'])):
//
//    endif;
//}





































//if (!empty($_POST['email']) && !empty($_POST['wachtwoord'])):
//    //Nieuwe gebruiker in database toevoegen
//
//    $sql = "INSERT INTO gebruikers (email, gebruikersnaam, wachtwoord) VALUES (:regemail, :gb, :regwachtwoord)";
//    $stmt = $conn->prepare($sql);
//
//    $stmt->bindParam(':email', $_POST['email']);
//    $stmt->bindParam(':gb', $_POST['gb']);
//    $stmt->bindParam(':regwachtwoord', password_hash( $_POST['wachtwoord'], PASSWORD_BCRYPT));
//
//    if ($stmt->execute()):
//        die('Gelukt!');
//    else:
//        die('Niet gelukt');
//    endif;
//endif;





































//
//

