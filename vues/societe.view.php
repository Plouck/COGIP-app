<?php
include "header.view.php";
include "../controllers/societe.controllers.php";
 ?>
    <h1>Sociétés</h1>
    <table>
      <tr>
        <th>Name</th>
      </tr>
</a>
<?php

foreach ($donnees as $key => $societe) {

  echo "<tr><td><a href='detailsociete.view.php?id=".$societe['idSociete']."'>".  $societe['name' ]. "</a></td></tr>";

}

 ?>
</table>
<?php
include "footer.view.php";
 ?>
