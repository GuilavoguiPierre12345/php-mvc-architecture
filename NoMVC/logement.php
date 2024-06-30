<?php
    // le code pour la connexion à la base de donnée
    try {
        // le nom de la source = data source name
        $dsn = 'mysql:host=localhost;dbname=agence';
        // le nom d'utilisateur 
        $user = 'root';
        // le mot de passe 
        $password = '';
        // les options de la connexion
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES utf8',
                    PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION);
        // instanciation de la connexion
        $con = new PDO($dsn,$user,$password,$options);

    } catch (Exception $e) {
        die('Erreur de connexion à la base de donnée </br>'.$e->getMessage());
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logements</title>
</head>
<body>
    <h1>Afficher les Logements</h1>
    <table>
       <thead>
            <tr>
                <th>Num</th>
                <th>Type</th>
                <th>Id_quartier</th>
                <th>Adresse</th>
                <th>Superficie</th>
                <th>Loyer</th>
            </tr>
       </thead>
       <tbody>
        <?php
            // la requête de la selection de tous les logements
            $response = $con->query('SELECT * FROM logements');
            // récupération du résultat ligne par ligne
            while($data = $response->fetch(PDO::FETCH_OBJ))
            {
                echo "<tr>\n";
                    // récupérer chaque champ (colonne)
                    foreach ($data as $key => $value) {
                        echo "<td>$value</td>";
                    }
                echo "</tr>";
            }
            // fermeture du curseur
            $response->closeCursor();
        ?>
       </tbody>
    </table>
</body>
</html>