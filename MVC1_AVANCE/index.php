<?php
/**
 * ici nous utilisont un controleur frontalier qui permet
 * de faire le choix du controleur ciblé par la requête du visiteur
 */
    try {
        if(isset($_GET['action']))
        {
            if($action == 'apartmentsoftype')
                require('./controllers/apartmentsoftype.php');
            // elseif($action == 'addapartment')
            //     require('./controllers/addapartment.php');
            else
                require('./controllers/allapartments.php');
        }else
            // par défaut on affiche tout les appartements
            require('./controllers/allapartments.php');
    } catch (Exception $e) {
        echo 'Erreur:',$e->getMessage();
    }