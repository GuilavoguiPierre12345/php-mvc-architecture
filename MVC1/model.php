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

// la fonction qui recupère tout les appartements
    function getApartements():PDOStatement
    {
        // appel de la fonction de connexion à la base de donnée
        $db = dbConnect();
        $apartements = $db->query('SELECT * FROM logements');
        return $apartements;
    }

// la fonction qui affiche les appartements par type
    function getApartementsOfType(string $type):array
    {
        $db = dbConnect();
        $request = $db->prepare("SELECT * FROM logements WHERE type_logt =:type_");
        $request->bindParam(':type_',$type,PDO::PARAM_STR);
        $request->execute();
        $apartements = $request->fetchAll(PDO::FETCH_ASSOC);
        $request->closeCursor();
        return $apartements;
    }