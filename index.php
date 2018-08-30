<?php

require 'vues/header.view.php';

//On inclut le contrôleur s'il existe et s'il est spécifié
if (!empty($_GET['page']) && is_file('controllers/'.$_GET['page'].'.php'))
{
        include 'controleurs/'.$_GET['page'].'.php';
}
else
{
        include 'controllers\accueil.controller.php';
}

require 'vues/footer.view.php';

?>
