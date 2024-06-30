<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logements</title>
</head>
<body>
    <h1>Affichage des logements par types</h1>
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
            foreach ($apartments as $data) {
                echo "<tr>\n";
                    // récupérer chaque champ (colonne)
                    foreach ($data as $key => $value) {
                        echo "<td>$value</td>";
                    }
                echo "</tr>";
            }
        ?>
       </tbody>
    </table>
</body>
</html>
