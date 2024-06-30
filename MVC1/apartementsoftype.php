<?php
// appel de la page model
    require('model.php');
    // on vérifie si la page à réçu une valeur 
    if(isset($_GET['type']))
    {
        $type = (String)htmlspecialchars($_GET['type']);
        $apartements = getApartementsOfType($type);
        require('apartementsoftypeview.php');
    }else
        echo 'Error: no type defined!';