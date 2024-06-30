<?php
require('../models/apartmentsoftype.php');
// on vérifie si la page à réçu une valeur 
if(isset($_GET['type']))
{
    $type = (string)htmlspecialchars($_GET['type']);
    $apartments = getApartmentsOfType($type);
    require('../view/apartmentsviewoftypeview.php');
}else
    echo 'Error: no type defined!';