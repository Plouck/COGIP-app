<?php
include "header.view.php";
include "../controllers/factures.controllers.php";
 ?>
    <h1>Factures</h1>
    <table>
      <tr>
        <th>N° de facture</th>
        <th>Date</th>
      </tr>
</a>
<?php

foreach ($donnees as $key => $facture) {

  echo "<tr><td><a href='detailfacture.view.php'>".  $facture['idFacture' ]. "</td><td>".  $facture['date' ]. "</a></td></tr>";

}

 ?>
</table>
<?php
include "footer.view.php";
 ?>
