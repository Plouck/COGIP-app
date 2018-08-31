<?php
include "../controllers/societe.controllers.php";
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sociétés</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h1>Sociétés</h1>
    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Adresse</th>
        <th>Pays</th>
        <th>TVA</th>
        <th>Phone</th>
      </tr>

<?php

foreach ($donnees as $key => $societe) {

  echo "<tr><td>". $societe['idSociete' ]. "</td><td>". $societe['name' ]. "</td><td>". $societe['adresse' ]."</td><td>". $societe['pays' ]."</td><td>". $societe['tva' ]."</td><td>".$societe['phone' ]. "</td></tr>";

}

 ?>
</table>
  </body>
</html>
