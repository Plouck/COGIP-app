<?php
include "header.view.php";
include "../controllers/fournisseurs.controllers.php";
 ?>

    <h1>Fournisseurs</h1>
    <table>
      <tr>
        <th>Fournisseur</th>
      </tr>
</a>
<?php

foreach ($donnees as $key => $fournisseur) {

  echo "<tr><td><a href='detailsociete.view.php'>".  $fournisseur['name' ]. "</a></td></tr>";

}

 ?>
</table>
<?php
include "footer.view.php";
 ?>
