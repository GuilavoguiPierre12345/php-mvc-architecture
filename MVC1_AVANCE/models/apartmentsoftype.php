<?php
    require('database.php');
// la fonction qui affiche les appartements par type
    function getApartmentsOfType(string $type):array
    {
        $db = dbConnect();
        $request = $db->prepare("SELECT * FROM logements WHERE type_logt =:type_");
        $request->bindParam(':type_',$type,PDO::PARAM_STR);
        $request->execute();
        $apartements = $request->fetchAll(PDO::FETCH_ASSOC);
        $request->closeCursor();
        return $apartements;
    }