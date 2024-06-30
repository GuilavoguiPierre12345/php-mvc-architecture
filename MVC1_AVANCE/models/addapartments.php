<?php
    // connexion à la base de donnée
    require('database.php');

    // le corp de la fonction d'ajout
    function addapartment(array $infos):void
    {
        // var_dump($infos); exit;
        $db = dbConnect();
        $request = $db->prepare('INSERT INTO logements(type_logt,id_quartier,adresse,superficie,loyer)
                                VALUES(?,?,?,?,?)');
        // $request->bindParam(1,$apartment_infos[0]);
        // $request->bindParam(2,$apartment_infos[1]);
        // $request->bindParam(3,$apartment_infos[2]);
        // $request->bindParam(4,$apartment_infos[3]);
        // $request->bindParam(5,$apartment_infos[4]);
        $request->execute($infos);
    }