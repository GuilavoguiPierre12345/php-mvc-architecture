<?php
// appel de la page model
require('./models/allapartments.php');
$response = getApartements();
// appel de la page vue
require('./view/apartmentsview.php');