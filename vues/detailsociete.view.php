<?php
include "header.view.php";
require "../controllers/detailsociete.controllers.php";
?>
<h1>Société</h1>
<table>
  <tr>
    <th>Société</th>
    <th>Adresse</th>
    <th>Pays</th>
    <th>TVA</th>
    <th>Téléphone</th>
    <th>Type</th>
  </tr>
<?php
echo "<tr><td>".  $donnees[0]['name' ]. "</td><td>". $donnees[0]['adresse']."</td><td>". $donnees[0]['pays']."</td><td>". $donnees[0]['tva']."</td><td>". $donnees[0]['phone']."</td><td>". $donnees[0]['type_idType']."</td></tr>";
?>
</table>
<?php
 include "footer.view.php";
  ?>
