<?php

require 'vues/header.view.php';

//On inclut le contrôleur s'il existe et s'il est spécifié
if (!empty($_GET['page']) && is_file('vues/'.$_GET['page'].'.view.php'))
{
        include 'vues/'.$_GET['page'].'.view.php';
}
else
{
        include 'controllers\accueil.controllers.php';
}

require 'vues/footer.view.php';

?>
