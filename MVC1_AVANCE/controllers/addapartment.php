<?php
    $error_infos = '';
    // traitement des valeurs reçu par la vue
    if(isset($_POST))
    {
            $apartment_infos = $_POST['apartment_infos'];
           
        for($i=0; $i<sizeof($apartment_infos);$i++)
        {
            if(empty($apartment_infos[$i]))
            {
                $error_info = 'Veuillez remplir le champ: '.$apartment_infos[$i];
                exit;
            }
        }
        // appel du model d'ajout d'un appartement
        require('../models/addapartments.php');
        addapartment($apartment_infos);
    }
    // appel de la vue pour la récupération des données envoyées
    require('../view/addapartmentview.php');
    
    
