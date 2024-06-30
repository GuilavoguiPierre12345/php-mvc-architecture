<?php
    
    require('database.php');
    // la fonction qui recupère tout les appartements
    function getApartements():PDOStatement
    {
        // appel de la fonction de connexion à la base de donnée
        $db = dbConnect();
        $apartements = $db->query('SELECT * FROM logements');
        return $apartements;
    }