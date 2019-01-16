<?php

// Connect BDD

    define('db_host', 'mysql:host=localhost;dbname=stema');

    define('db_login', 'root');

    define('db_pass', '');

    try
    {
        $bdd = new PDO(db_host, db_login, db_pass);
    }

    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }



?>