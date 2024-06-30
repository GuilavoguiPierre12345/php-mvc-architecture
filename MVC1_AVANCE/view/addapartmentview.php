<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add apartment</title>
</head>
<body>
    <h1>Ajout d'un nouveau logement</h1>
    <!-- un formulaire pour permettre d'afficher les logements par type -->
    <iframe src="" width="0" height="0" name="reste_ici" frameborder="0"></iframe>
    <form action="../controllers/addapartment.php" method="POST" target="reste_ici">
        <table>
            <tr>
                <td>
                    <label>Type apartment :</label>
                </td>
                <td>
                    <select name="apartment_infos[]">
                        <option value="F1">F1</option>
                        <option value="F2">F2</option>
                        <option value="F3">F3</option>
                        <option value="F4">F4</option>
                        <option value="F5">F5</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label>Id quartier :</label></td>   
                <td>
                   <input type="number" name="apartment_infos[]" min="1" max="10">
                </td>
            </tr>
            <tr>
                <td><label> Adresse apartment :</label></td>
                <td>
                    <input type="text" name="apartment_infos[]" placeholder="adresse apartment">
                </td>
            </tr>
            <tr>
                <td><label> Superficie :</label></td>
                <td>
                    <input type="number" name="apartment_infos[]" min="20" max="800" step=".5" placeholder="superficie apartment">
                </td>
            </tr>
            <tr>
                <td><label> Loyer :</label></td>
                <td>
                    <input type="text" name="apartment_infos[]" placeholder="nombre chambre">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Add apartment">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>