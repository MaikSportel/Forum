<?php

function dbConnect()
{
    global $db;
    try {
        $db = new PDO('mysql:host=localhost;dbname=twdforum', 'maik', 'root');
    } catch (PDOException $error) {
        $db = null;
        return false;
    }
    return true;
}

function register(){
    if (!empty($_POST['regemail']) && !empty($_POST['regwachtwoord'])):

    endif;
}


function dbQuery($sql, $params = []) {
    global $db, $db_statement;

    if($db == null)
        return false;

    try {
        $db_statement = $db->prepare($sql);
        $db_statement->execute($params);
    } catch (PDOException $error) {
        return false;
    }
    return true;
}
