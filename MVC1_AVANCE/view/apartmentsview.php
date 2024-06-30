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
    <br><br>
    <!-- un formulaire pour permettre d'afficher les logements par type -->
    <form action="./controllers/apartmentsoftype.php" method="get">
        <input type="submit" value="Afficher les logements de type:">
        <select name="type">
            <option value="F1">F1</option>
            <option value="F2">F2</option>
            <option value="F3">F3</option>
            <option value="F4">F4</option>
            <option value="F5">F5</option>
        </select>
    </form>
    <a href="./view/addapartmentview.php">Add apartment</a>
</body>
</html>