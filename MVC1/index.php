<?php
// appel de la page modèl
require('model.php');
$response = getApartements();
// appel de la page vue
require('view.php');


