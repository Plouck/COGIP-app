<?php
include "controllers/factures.controllers.php";
 ?>
    <h1>Factures</h1>
    <table>
      <tr>
        <th>N° de facture</th>
        <th>Date</th>
      </tr>
<?php

foreach ($donnees as $key => $facture) {

  echo "<tr><td><a href='detailfacture.view.php?idFacture=".$facture['idFacture']."'>".  $facture['idFacture' ]. "</td><td>".  $facture['date' ]. "</a></td></tr>";

}

 ?>
</table>
