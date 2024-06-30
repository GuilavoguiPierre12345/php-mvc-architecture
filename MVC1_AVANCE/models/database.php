<?php
// la fonction de connexion à la base de donnée
    function dbConnect():PDO
    {
        try {
            
            $dsn = 'mysql:host=localhost;dbname=agence'; // data source name
            $user = 'root'; //le nom d'utilisateur de la base 
            $password = ''; //le mot de passe de connexion à la base
            $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'); //les options de connexion à la base
            
            // instanciation de la classe de connexion
            $db = new PDO($dsn,$user,$password,$options);
            return $db;
        } catch (PDOException $e) {
            // le message en cas d'erreur lors de la connexion
            die('Erreur lors de la connexion à la base de donnée'.$e->getMessage());
        }
    }